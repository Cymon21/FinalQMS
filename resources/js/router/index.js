import { createRouter, createWebHistory } from "vue-router";
import AdminDashBoard from '../components/Admin/Dashboard.vue';

const routes = [
    {
        path: '/',
        // component:,
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: AdminDashBoard
    }
]

const router = createRouter({
    history: createWebHistory,
    routes
})

export default router;