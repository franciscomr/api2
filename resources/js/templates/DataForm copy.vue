<script>
import { ref, onMounted } from 'vue';
import FormInput from '../components/FormInput.vue';
import FormButton from '../components/FormButton.vue';
export default {
  name: 'DataForm',
  components: {
    FormInput, FormButton
  },
  props: {
    title: {
      type: String,
      default: 'Form'
    },
    fields: {
      default: {},
    },
    data: {
      default: {},
    },
    new_record: {
      type: Boolean,
      default: true
    },
    basepath: {
      type: String
    }
  },
  setup(props) {
    const form = ref({});
    const errors = ref({});
    const form1 = {
      'data': {
        'type': props.basepath.split('.')[1],
        'attributes': form.value,
      }


    };

    const token = sessionStorage.getItem("token")
    const submit = () => {
      if (props.new_record) {
        submitCreate()
      } else {
        submitUpdate()
      }
    }

    onMounted(() => {
      if (!props.new_record) {
        form.value = props.data
      }
    });

    const submitCreate = async () => {
      let routename = route(props.basepath + '.store');
      await axios.post(routename, form1, {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      })
        .then(res => {
          // window.location.href = res.data.route
        })
        .catch(err => {
          errors.value = err.response.data.errors

        })
    }

    const submitUpdate = async () => {
      /*
      let routename = props.basepath + '.update'
      axios.put(route(routename, form.value, { id: form['id'] }))
        .then(res => {
          window.location.href = res.data.route
        })
        .catch(err => {
          if (err.response) {
            if (errors !== undefined && err.response.data.errors !== undefined) {
              errors.value = err.response.data.errors
            }
          }
          else if (err.request) {
            console.log(err.request)
          }
        }) */
    }
    return {
      form, errors, submit, submitCreate, submitUpdate
    }
  },
}
</script>
<template>
  <div class="bg-white max-w-lg p-8 rounded-md mx-auto">

    <form @submit.prevent="submit(new_record)">
      <div class="space-y-3">
        <div v-for="(field, index) in fields" :key="index">

          <FormInput v-if="field.type === 'input'" v-model="form[field.name]" :id="field.name" :label="field.label"
            :message="errors[field.name]" />
        </div>
        <div class="p-y-2">
          <FormButton class="text-center">
            <span v-if="new_record"> Registrar</span>
            <span v-else> Actualizar</span>
          </FormButton>
        </div>
      </div>
    </form>


  </div>
</template>