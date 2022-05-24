<template>
  <HeaderVue />
  <section id="product1" class="section-p1">
    <h2>Homme - {{ this.$route.params.categorie }}</h2>
    <p>4302 Produits trouvés</p>
    <div class="product">
        <div class="pro-contaier" >
          <div class="pro" v-for="art in articles" :key="art.idArticle">
            <router-link :to="'/productsdetails/'+art.idArticle" >
              <img
                :src="require(`../assets/img/product/homme/${art.image}`)"
                :alt="image"
              />
              <div class="des">
                <span>adidas</span>
                <h5>{{ art.titre }}</h5>
                <h4>{{ art.prix }} MAD</h4>
              </div>
            </router-link>
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
  name: "ProductsVue",
  components: {
    HeaderVue,
    FooterVue,
  },
  mounted() {
    // this.categorie = this.$route.params.categorie;
    // this.Products();
  },
  watch: {
    $route() {
      console.log("Watch Called");
      this.Products();
    },
  },
  created() {
    console.log("created called");
    this.Products();
  },
  data() {
    return {
      categorie: "",
      article: {
        idArticle: null,
        titre: null,
        description: null,
        prix: null,
        image: null,
        categorie: null,
        genre: null,
      },
      articles: [],
    };
  },
  methods: {
    async Products() {
      let res = await axios.get(
        "http://localhost/1FilRouge/apiuser/api/article/getarticles.php?categorie=" +
          this.$route.params.categorie
      );
      this.articles = res.data;
      console.log(res.data);
    },
  },
};
</script>
<style>
.product a {text-decoration: none;}

.product a .pro-contaier{display: flex;justify-content: center;}
</style>