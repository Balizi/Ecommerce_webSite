import HomeVue from './components/HomeVue.vue'
import ProductsVue from './components/ProductsVue.vue'
import ProductsDetails from './components/ProductsDetails.vue'
import PanierVue from './components/PanierVue.vue'
import LoginUser from './components/LoginUser.vue'
import RegisterVue from './components/RegisterVue.vue'
import ContactUs from './components/ContactUs.vue'

import { createRouter,createWebHistory } from 'vue-router'

const routes=[
    {
        name:'HomeVue',
        component:HomeVue,
        path:'/'
    },
    {
        name:'ProductsVue',
        component:ProductsVue,
        path:'/products/:categorie/:genre'
    },
    {
        name:'ContactUs',
        component:ContactUs,
        path:'/contact'
    },
    {
        name:'ProductsDetails',
        component:ProductsDetails,
        path:'/productsdetails/:idArticle'
    },
    {
        name:'PanierVue',
        component:PanierVue,
        path:'/paniervue'
    },
    {
        name:'LoginUser',
        component:LoginUser,
        path:'/login'
    },
    {
        name:'RegisterVue',
        component:RegisterVue,
        path:'/register'
    }
]

const router=createRouter({
    history:createWebHistory(),
    routes,
})

export default router;