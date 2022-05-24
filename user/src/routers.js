import HomeVue from './components/HomeVue.vue'
import ProductsVue from './components/ProductsVue.vue'
import ProductsDetails from './components/ProductsDetails.vue'
import ProductFemme from './components/ProductFemme.vue'
import ProDetailsFemme from './components/ProDetailsFemme.vue'
import PanierVue from './components/PanierVue.vue'
import LoginUser from './components/LoginUser.vue'
import RegisterVue from './components/RegisterVue.vue'

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
        path:'/products/:categorie'
    },
    {
        name:'ProductFemme',
        component:ProductFemme,
        path:'/productsf/:categorie'
    },
    {
        name:'ProductsDetails',
        component:ProductsDetails,
        path:'/productsdetails/:idArticle'
    },
    {
        name:'ProDetailsFemme',
        component:ProDetailsFemme,
        path:'/prodetailsfemme/:idArticle'
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