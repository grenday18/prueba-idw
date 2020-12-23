require('./bootstrap');
window.Vue = require('vue');

import router from './router';
import Vuetify from 'vuetify';
import store from './store';

Vue.use(Vuetify);

Vue.component('mainapp',require('./components/mainAppComponent.vue').default)
Vue.component('startsComponent',require('./components/startsComponent.vue').default)


const app = new Vue({
    el: '#app',
    router,
    store,
    vuetify: new Vuetify()
  })