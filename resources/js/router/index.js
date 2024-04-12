import { createRouter, createWebHistory } from "vue-router";

//Pages Admin
import AdminDashboard from '../components/Admin/Dashboard.vue';
import NotFound from '../components/Notfound.vue';
import TransactionView from '../components/Admin/Transaction/index.vue';
import UsersView from '../components/Admin/User/index.vue';



const routes = [
    {
        path: '/:pathMatch(.*)*',
        component: NotFound,
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: AdminDashboard
    },
    {
        path: '/transaction',
        name: 'transaction',
        component: TransactionView
    },
    {
        path: '/user',
        name: 'user',
        component: UsersView
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;