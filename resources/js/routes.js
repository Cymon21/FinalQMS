// import Vue from 'vue';
// import Router from 'vue-router';
import { createRouter, createWebHistory } from "vue-router";
import AdminDashboard from './components/Admin/Dashboard.vue'

// Vue.use(Router);

const routes = [ 
    {
        path: '/dashboard',
        name: 'dashboard',
        component: AdminDashboard
    }
]

// const router = new Router({
// 	mode: 'history',
// 	routes: routes
// });

// export default router

export default createRouter({
    history: createWebHistory(),
    routes
})

