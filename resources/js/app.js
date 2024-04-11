import './bootstrap';
import { createApp } from 'vue';
import router from './router/index.js';


const app = createApp({});

app.use(router);
app.mount('#app');

