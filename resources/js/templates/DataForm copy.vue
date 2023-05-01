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
      errors.value = {}
      let routename = route(props.basepath + '.store');

      let formdata = {
        'type': routename.split("/").pop(),
        'attributes': form.value
      }
      await axios.post(routename, formdata, {

      })
        .then(res => {
          location.href = route(props.basepath + '.home')
        })
        .catch(err => {
          errors.value = err.response.data.errors
          console.log(errors.value)
        })
    }

    const submitUpdate = async () => {
      errors.value = {}
      let routename = route(props.basepath + '.update', { organization: props.data.id });
      let formdata = {
        'type': routename.split("/").pop(),
        'attributes': form.value
      }

      axios.patch(routename, formdata, {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      })
        .then(res => {
          window.location.href = route(props.basepath + '.home');
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
        })
    }
    return {
      form, errors, submit, submitCreate, submitUpdate
    }
  },
}
</script>
<template>
  <div>

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

  </div>
</template>