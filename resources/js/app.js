import './bootstrap';
import { createApp } from 'vue';
import router from './routes';
import AdminDashboard from './components/Admin/Dashboard.vue'

createApp({
    components: {
        AdminDashboard
    }
}).use(router).mount('#app')

