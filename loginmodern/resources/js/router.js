//IMPORT SECTION
import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)

//DEFINE ROUTE
const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/dis',
            name: 'discovery',
            component: Discovery
        }
    ]
});