<script>
import Guest from '../layouts/Guest.vue';
import Logo from '../components/Logo.vue'
import FormInput from '../components/FormInput.vue';
import FormButton from '../components/FormButton.vue';
export default {
  name: 'Login',
  components: {
    Guest, Logo, FormInput, FormButton
  },
  data() {
    return {
      form: {},
      errors: {}
    }
  },
  methods: {
    async submit() {
      await axios.post(route('login.post'), this.form)
        .then(res => {
          let $token = res.data.token;
          sessionStorage.setItem('token', $token);
          window.location.href = 'home';
        })
        .catch(err => {

          if (err.response) {
            if (this.errors !== undefined && err.response.data.errors !== undefined) {
              this.errors = err.response.data.errors
            }
          }
          else if (err.request) {
            console.log(err.request)
            // client never received a response, or request never left
          }
        })
    },
  }
}
</script>
<template>
  <Guest>
    <form @submit.prevent="submit">
      <div class="bg-white  w-screen max-w-md flex h-full flex-col items-end justify-center py-6 rounded-md">
        <div class=" w-full space-y-3 p-8">
          <Logo class="h-20 mx-auto" alt="logo" />
          <FormInput v-model="form.username" :id="'username'" :label="'Usuario'" :message="errors.username" />
          <FormInput v-model="form.password" :id="'password'" :label="'Contraseña'" :message="errors.password"
            :type="'password'" />
          <div>
            <a href="" class="w-full text-sm focus:outline-none tracking-wide hover:underline text-slate-600">
              ¿Olvidaste la contraseña?
            </a>
          </div>
          <FormButton class="text-center">
            Iniciar Sesión
          </FormButton>
        </div>
      </div>


    </form>
  </Guest>
</template>
