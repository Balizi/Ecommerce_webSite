<template>
  <HeaderVue />
  <section id="product1" class="section-p1">
    <h2>Femme - {{ this.$route.params.categorie }}</h2>
    <p>4302 Produits trouvés</p>
    <div class="product">
      <div class="pro-contaier">
        <div class="pro" v-for="art in articles" :key="art.idArticle">
          <router-link :to="'/prodetailsfemme/' + art.idArticle">
            <img :src="require(`../assets/img/product/femme/${art.image}`)" />
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
  name: "ProductFemme",
  components: {
    HeaderVue,
    FooterVue,
  },
  watch: {
    $route() {
      console.log("Watch Called");
      this.Products();
    },
  },
  created() {
    this.Products();
  },
  data() {
    return {
      articles: [],
    };
  },
  methods: {
    async Products() {
      let res = await axios.get(
        "http://localhost/1FilRouge/apiuser/api/article/getarticlesfemme.php?categorie=" +
          this.$route.params.categorie
      );
      this.articles = res.data;
      console.log(res.data);
    },
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