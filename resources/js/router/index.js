import { createRouter, createWebHistory } from "vue-router";
import NotFound from '../components/Notfound.vue';

//Pages Admin
import AdminDashboard from '../components/Admin/Dashboard.vue';
import UsersView from '../components/Admin/User/index.vue';
import UserType from '../components/Admin/UserType/index.vue'
import Logs from '../components/Admin/Logs/index.vue'
import Profile from '../components/Admin/Profile/index.vue'

//Guard View
import GuardView from '../components/Guard/index.vue'


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
        path: '/user',
        name: 'user',
        component: UsersView
    },
    {
        path: '/usertype',
        name: 'usertype',
        component: UserType
    },
    {
        path: '/logs',
        name: 'logs',
        component: Logs
    },
    {
        path: '/profile',
        name: 'profile',
        component: Profile
    },
    // Guard View
    {
        path: '/guard',
        name: 'guard',
        component: GuardView
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;