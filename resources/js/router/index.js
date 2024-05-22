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

    //Admin View
    {
        path: '/admin/dashboard',
        name: 'dashboard',
        component: AdminDashboard
    },

    {
        path: '/admin/user',
        name: 'user',
        component: UsersView
    },
    {
        path: '/admin/usertype',
        name: 'usertype',
        component: UserType
    },
    {
        path: '/admin/logs',
        name: 'logs',
        component: Logs
    },
    {
        path: '/admin/profile',
        name: 'profile',
        component: Profile
    },
    //Admin View Ended

    // Guard View
    {
        path: '/guard/dashboard',
        name: 'guard',
        component: GuardView
    },
    //Cashier View
    {
        path: '/cashier/dashboard',
        name: 'cashier',
        component: CashierView
    },
    //Assesor View
    {
        path: '/assesor/dashboard',
        name: 'assesor',
        component: AssesorView
    },
    //Queue View
    {
        path: '/queuedisplay/dashboard',
        name: 'queuedisplay',
        component: QueView
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;