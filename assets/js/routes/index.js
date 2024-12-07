import Home from '../screens/Home.vue'
import {createRouter, createWebHistory} from 'vue-router'

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home,
            name: 'Home',
        },
        {
            path: '/dashboard',
            name: 'Dashboard',
        },
    ],
})