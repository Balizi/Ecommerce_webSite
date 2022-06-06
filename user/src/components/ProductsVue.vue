<template>
  <HeaderVue />
  <section id="product1" class="section-p1">
    <h2 style="text-transform: capitalize;">{{this.$route.params.genre}} - {{ this.$route.params.categorie }}</h2>
    <p>{{this.articles.length}} Produits trouvés</p>
    <div class="product">
      <div class="pro-contaier">
        <div class="pro" v-for="art in dataPaginate" :key="art.idArticle">
          <router-link :to="'/productsdetails/' + art.idArticle">
            <img v-if="art.genre == 'Homme'" :src="require(`../assets/img/product/homme/${art.image}`)" />
            <img v-if="art.genre == 'femme'" :src="require(`../assets/img/product/femme/${art.image}`)" />
            <img v-if="art.genre == 'enfant'" :src="require(`../assets/img/product/enfant/${art.image}`)" />
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

  <section id="pagination" class="section-p1">
    <a href="#" @click="getFirstPagi()">First</a>
    <a href="#" v-for="page in totalPaginate()" :key="page" @click.prevent="getDataPaginate(page)">{{page}}</a>
    <a href="#" @click="getLastPagi()">Last</a>
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
      layout:"homme",
      elementPagination:6,
      dataPaginate:[],
      currentPaginate: 1
    };
  },
  methods: {
    async Products() {
      // let res = await axios.get(
      //   "http://localhost/1FilRouge/apiuser/api/article/getarticles.php?categorie=" +
      //     this.$route.params.categorie
      // );
      let res=await axios.get('http://localhost/1FilRouge/apiuser/api/article/getArticleCategorie.php?categorie='+this.$route.params.categorie+'&genre='+this.$route.params.genre);
      let ini=(1 * this.elementPagination) - this.elementPagination;
      let fin=(1 * this.elementPagination);
      this.dataPaginate=res.data.slice(ini,fin);
      this.articles = res.data;
    },
    totalPaginate()
    {
      return Math.ceil(this.articles.length / this.elementPagination);
    },
    getDataPaginate(Current)
    {
      this.currentPaginate=Current;
      let ini=(Current * this.elementPagination) - this.elementPagination;
      let fin=(Current * this.elementPagination);
      console.log(this.articles.slice(ini,fin));
      // console.log(ini);
      // console.log(fin);
      this.dataPaginate=this.articles.slice(ini,fin);
    }
  },
};
</script>
<style>
.product a {
  text-decoration: none;
}

.product a .pro-contaier {
  display: flex;
  justify-content: center;
}
</style>