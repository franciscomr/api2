import './bootstrap';

import { createApp } from 'vue'
import Login from './templates/Login.vue'
import Dashboard from './templates/Dashboard.vue';
import Datatable from './templates/Datatable.vue';
const Application = createApp({
  components: {
    'Login': Login,
    'Dashboard': Dashboard,
    'DataTable': Datatable
  }
});
Application.mount('#app');
