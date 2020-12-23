import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

export default new Vuex.Store({
    state : {
        user: true,

    },
    getters: {

    },

    mutations: {
        setUpdateUser(state, data){
            state.user = data
        },
    },

    actions :{

    }

})