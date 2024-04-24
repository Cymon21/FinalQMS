import { createRouter, createWebHistory } from "vue-router";
import NotFound from '../components/Notfound.vue';

//Pages Admin
import AdminDashboard from '../components/Admin/Dashboard.vue';
import UsersView from '../components/Admin/User/index.vue';
import UserType from '../components/Admin/UserType/index.vue'
import Logs from '../components/Admin/Logs/index.vue'
import Profile from '../components/Admin/Profile/index.vue'


//Assesor View
import AssesorView from '../components/Assesor/index.vue'
// Cashier View
import CashierView from '../components/Cashier/index.vue'

//Guard View
import GuardView from '../components/Guard/index.vue'

//Queue View
import QueView from '../components/Queuedisplay/index.vue'


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
    //Cashier View
    {
        path: '/cashier',
        name: 'cashier',
        component: CashierView
    },
    //Assesor View
    {
        path: '/assesor',
        name: 'assesor',
        component: AssesorView
    },
    //Queue View
    {
        path: '/queuedisplay',
        name: 'queuedisplay',
        component: QueView
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;