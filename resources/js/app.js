import './bootstrap';

import { createApp } from 'vue'
import Login from './templates/Login.vue'
import Dashboard from './templates/Dashboard.vue';
import Datatable from './templates/Datatable.vue';
import DataForm from './templates/DataForm.vue';
const Application = createApp({
  components: {
    'Login': Login,
    'Dashboard': Dashboard,
    'DataTable': Datatable,
    'DataForm': DataForm
  }
});
Application.mount('#app');
