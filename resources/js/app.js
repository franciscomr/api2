import './bootstrap';

import { createApp } from 'vue'
import Dashboard from './templates/Dashboard.vue';
import DataTable from './templates/DataTable.vue';
import DataForm from './templates/DataForm.vue';
import Alert from './components/Alert.vue';
const Application = createApp({
  components: {
    'Dashboard': Dashboard,
    'DataTable': DataTable,
    'DataForm': DataForm,
    'Alert': Alert
  }
});
Application.mount('#app');
