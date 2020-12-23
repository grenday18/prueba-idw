import Vue from 'vue'
import Router from 'vue-router'
import reviews from './components/reviews.vue'

Vue.use(Router)

export default new Router({
    routes : [
            {
                path: '/',
                component : reviews,
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