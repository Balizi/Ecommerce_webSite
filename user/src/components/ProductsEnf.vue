<template>
    <HeaderVue />
    <section id="product1" class="section-p1">
    <h2>Enf - </h2>
    <p>4302 Produits trouvés</p>
    <div class="product">
      <div class="pro-contaier">
        <div class="pro" v-for="dt in data" :key="dt.idArticle">
            <img :src="require(`../assets/img/product/enfant/${dt.image}`)" />
            <div class="des">
              <span></span>
              <h5>{{dt.titre}}</h5>
              <h4>{{dt.prix}} MAD</h4>
            </div>
        </div>
      </div>
    </div>
  </section>
    <FooterVue />
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import FooterVue from "./FooterVue.vue";
import axios from "axios";
export default {
    name:"ProductsEnf",
    components:{
        HeaderVue,
        FooterVue,
    },
    data() {
        return {
            data:[]
        }
    },
    mounted() {
        this.products();
        // this.afficher();
    },
    methods: {
        async products()
        {
            let res=await axios('http://localhost/1FilRouge/apiuser/api/article/getArticleEnf.php?categorie='+this.$route.params.categorie+'&genre='+this.$route.params.genre);
            this.data=res.data;
            console.log(this.data)
        }
        // afficher()
        // {
        //     console.log(this.$route.params.categorie);
        //     console.log(this.$route.params.genre);
        // }

    },
}
</script>
<style>
    
</style>