import Vue from 'vue';
import Router from 'vue-router';
Vue.use(Router);

const routes = [ 
    {
        path: '/dashboard',
        name: 'dashboard',
        component: require('./components/Dashboard.vue').default
    }
]

const router = new Router({
	mode: 'history',
	routes: routes
});

export default router