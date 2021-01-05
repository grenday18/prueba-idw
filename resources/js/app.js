require('./bootstrap');
window.Vue = require('vue');

import router from './router';
import Vuetify from 'vuetify';
import store from './store';

Vue.use(Vuetify);
import 'vuetify/dist/vuetify.min.css'

Vue.component('mainapp',require('./components/mainAppComponent.vue').default)
Vue.component('startsComponent',require('./components/startsComponent.vue').default)
Vue.component('topMovies',require('./components/topMovies.vue').default)
Vue.component('movies-list',require('./components/moviesList.vue').default)
Vue.component('reviews-list',require('./components/reviewsList.vue').default)

const app = new Vue({
    el: '#app',
    router,
    store,
    vuetify: new Vuetify()
  })