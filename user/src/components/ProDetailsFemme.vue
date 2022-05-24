<template>
    <HeaderVue />
        <section id="prodetails" class="section-p1" v-for="dt in data" :key="dt.idArticle">
            <div class="single-pro-image">
                <img :src="require(`../assets/img/product/femme/${dt.image}`)" width="100%" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="../assets/img/product/homme/f2.jpg" width="100%" class="small-img" alt="rr">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/img/product/homme/f3.jpg" width="100%" class="small-img" alt="ttt">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/img/product/homme/f4.jpg" width="100%" class="small-img" alt="ttt">
                    </div>
                    <div class="small-img-col">
                        <img src="../assets/img/product/homme/f4.jpg" width="100%" class="small-img" alt="ttt">
                    </div>
                </div>
            </div>

            <div class="single-pro-details">
                <h6>Femme / <span>{{dt.categorie}}</span></h6>
                <h4>{{dt.titre}}</h4>
                <h2 id="change">{{dt.prix}} MAD</h2>
                <select name="" id="chose" onclick="Taille()" >
                    <option value="15" disabled selected>Select Size</option>
                    <option value="15">Small</option>
                    <option value="17">Large</option>
                    <option value="18">XLarge</option>
                </select>
                <input type="number" path="note" name="" min="1" value="1" id="val" onclick="Afficher()" >
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>{{dt.description}}</span>
            </div>

        </section>
    <FooterVue />
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import FooterVue from "./FooterVue.vue";
import axios from "axios";
export default {
  name: "ProDetailsFemme",
  components: {
    HeaderVue,
    FooterVue,
  },
  data() {
    return {
        data:[],
    };
  },
  mounted() {
    this.Details();
    console.log(this.$route.params.idArticle);
  },
  methods: {
    async Details() {
      let res = await axios.get(
        "http://localhost/1FilRouge/apiuser/api/article/articleDetails.php?idArticle=" +
          this.$route.params.idArticle
      );
      this.data = res.data;
      console.log(res.data);
    },
  },
};
</script>
<style>
#prodetails{display: flex;margin-top: 20px;}

#prodetails .single-pro-image{width: 40%;margin-right: 50px;}

#prodetails .single-pro-image > img{height: 600px;}

#prodetails .single-pro-image img{
    width: 100%;
    margin-top: 10px;
    object-fit: contain;
}

.small-img-group{
    display: flex;
    justify-content: space-between;
    width: 67%;
    margin: auto;
}

.small-img-col{flex-basis: 24%;cursor: pointer;}

#prodetails .single-pro-details{width: 50%;padding-top: 30px;}

.single-pro-details h6 > span{ text-transform: capitalize;}

#prodetails .single-pro-details h4{padding: 40px 0 20px;}

#prodetails .single-pro-details h2{font-size: 26px;}

#prodetails .single-pro-details select{
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
    outline-style: none;
}

#prodetails .single-pro-details input{
    width: 50px;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}

#prodetails .single-pro-details button{background-color: #088178;color: #fff;}

#prodetails .single-pro-details input:focus{outline: none;}

#prodetails .single-pro-details{line-height: 25px;}

@media (max-width:477px)
{
    /* Single Product */
    #prodetails{
        display: flex;
        flex-direction: column;
        padding: 0 15px;
    }

    #prodetails .single-pro-image > img{
        background: blue;
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    #prodetails .single-pro-image { width: 100%;    }

    #prodetails .single-pro-details{width: 100%;margin-bottom: 20px;}

    .small-img-group{width: 100%;}
}

</style>