import { createStore } from "vuex";

const store = createStore({
    state:{
        nb:JSON.parse(localStorage.getItem("produite")),
    },
    getters:{},
    mutations:{},
    actions:{},
})

export default store;
