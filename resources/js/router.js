import Vue from 'vue'
import Router from 'vue-router'


import reviews from './components/reviews.vue'
import index from './components/index.vue'

Vue.use(Router)

export default new Router({
    routes : [
            {
                path: '/',
                component : index,
            },
        // {
        //     path: '*',
        //     component: notfound,
        //     name: 'notfound'
    
        // },
    ],
    base: '/', 
    mode: 'history',
    linkExactActiveClass: "active",
})