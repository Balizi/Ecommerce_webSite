<template>
  <HeaderVue />

  <section id="hero">
    <!-- <h4>Trade-in-offer</h4> -->
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <button>Shop Now</button>
  </section>

  <section id="boutique">
    <div class="head">Boutiques Officielles</div>
    <div class="img">
      <div class="str">
        <img src="./../assets/img/boutique/1_260x144.png" alt="" />
      </div>
      <div class="str">
        <img src="./../assets/img/boutique/29_260x144.png" alt="" />
      </div>
      <div class="str">
        <img src="./../assets/img/boutique/30t_260x144.png" alt="" />
      </div>
    </div>
  </section>

  <section id="summer">
    <div class="head">Summer Collection New Modern Design</div>
    <div class="pro-contaier">
      <div class="pro">
        <img src="./../assets/img/products/f1.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Carton Astronaut T-Shirts</h5>
          <h4>$78</h4>
        </div>
      </div>

      <div class="pro">
        <img src="./../assets/img/products/f1.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Carton Astronaut T-Shirts</h5>
          <h4>$78</h4>
        </div>
      </div>
      <div class="pro">
        <img src="./../assets/img/products/f1.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Carton Astronaut T-Shirts</h5>
          <h4>$78</h4>
        </div>
      </div>
      <div class="pro">
        <img src="./../assets/img/products/f1.jpg" alt="" />
        <div class="des">
          <span>adidas</span>
          <h5>Carton Astronaut T-Shirts</h5>
          <h4>$78</h4>
        </div>
      </div>
    </div>
  </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-shirts & Accesssories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-contaier">
          <div class="pro" v-for="dt in data" :key="dt.idArticle">
            <img :src="require(`../assets/img/product/homme/${dt.image}`)" :alt="pic">
            <div class="des">
                <span>adidas</span>
                <h5>{{dt.titre}}</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>{{dt.prix }} MAD</h4>
            </div>
          </div>
        </div>
    </section>

  <FooterVue />
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import FooterVue from "./FooterVue.vue";
import axios from 'axios';
export default {
  name: "HomeVue",
  data()
  {
    return {
      data:[],
    }
  },
  components: {
    HeaderVue,
    FooterVue,
  },
  mounted(){
    this.Afficher();
  },
  methods:{
    async Afficher()
    {
      let res=await axios.get('http://localhost/1FilRouge/apiuser/api/article/readtop.php');
      this.data=res.data.data;
      console.log(this.data);
    }
  }
}
</script>
<style >
#hero {
  background-image: url("./../assets/img/home_img1.jpg");
  height: 95vh;
  width: 100%;
  background-size: cover;
  background-position: top 25% right 0;
  padding: 0 80px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

#hero h4 {
  padding-bottom: 10px;
  color: white;
}

#hero h2 {
  color: white;
  font-size: 50px;
}


#hero h1 {
  color: #a9c52f;
  font-size: 50px;
}

#hero button {
  background-image: url("./../assets/img/button.png");
  background-color: transparent;
  color: #088178;
  border: 0;
  padding: 14px 80px 14px 65px;
  background-repeat: no-repeat;
  cursor: pointer;
  font-weight: 700;
  font-size: 15px;
}
/* ---------- */
#boutique {
  width: 60%;
  margin: 20px auto;
  text-align: center;
  border-bottom: 0.5px solid #000;
}

#boutique .head {
  background-color: #ffc108;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  font-size: 30px;
  color: white;
}

#boutique .img {
  display: flex;
  justify-content: space-around;
  padding: 10px 0;
  background-color: #f5f5f5;
}
/* --------- */

#summer {
  width: 60%;
  margin: 80px auto;
  text-align: center;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom: 0.5px solid #000;
  flex-wrap: wrap;
}

#summer .head {
  background-color: #ffc108;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  font-size: 30px;
  color: white;
}

#summer .pro-contaier {
  display: flex;
  justify-content: space-around;
  padding-top: 20px;
  flex-wrap: wrap;
  background-color: #f5f5f5;
}

#summer .pro {
  width: 20%;
  /* min-width: 250px; */
  padding: 10px 12px;
  border: 1px solid #cce7d0;
  border-radius: 25px;
  cursor: pointer;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
  margin: 15px 0;
  transition: 0.2s ease;
  position: relative;
  background-color: white;
}

#summer .pro:hover {
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}

#summer .pro img {
  width: 100%;
  border-radius: 20px;
}

#summer .pro .des {
  text-align: start;
  padding: 10px 0;
}

#summer .pro .des span {
  color: #606063;
  font-size: 12px;
}

#summer .pro.des h5 {
  padding-top: 7px;
  color: #1a1a1a;
  font-size: 14px;
}

#summer .pro .des i {
  font-size: 12px;
  color: rgb(243, 181, 25);
}

#summer .pro .des h4 {
  /* padding-top: 7px; */
  font-size: 15px;
  font-weight: 700;
  color: #088178;
}

/* ------------ */

#banner {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url('./../assets/img/b2.jpg');
    width: 100%;
    height: 40vh;
    background-size: cover;
    background-position: center;
    margin-top: 100px;
}

#banner h4 {
    color: #fff;
    font-size: 16px;
}

#banner h2 {
    color: #fff;
    font-size: 30px;
    padding: 10px 0;
}

#banner h2 span {
    color: #ef3636;
}

button.normal {
    font-size: 14px;
    font-weight: 600;
    padding: 15px 30px;
    color: black;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.2s;
}

#banner button:hover {
    background-color: #088178;
    color: #fff;
}

/* ----------- */

#product1 {
    text-align: center;
    width: 80%;
    margin: auto;
}

#product1 .pro-contaier {
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
}

#product1 .pro {
    width: 30%;
    min-width: 250px;
    /* padding: 10px 12px; */

    border: 1px solid #cce7d0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
}

#product1 .pro:hover {
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}

#product1 .pro img {
    width: 100%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

#product1 .pro .des {

    text-align: start;
    padding: 10px 12px;
}

#product1 .pro .des span {
    color: #606063;
    font-size: 12px;
}

#product1 .pro.des h5 {
    padding-top: 7px;
    color: #1a1a1a;
    font-size: 14px;
}

#product1 .pro .des i {
    font-size: 12px;
    color: rgb(243, 181, 25);
}

#product1 .pro .des h4 {
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
}

#product1 .pro .cart {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom: 20px;
    right: 10px;
}

/* ----------- */
@media (max-width:477px) {

    /* #destockage{
        display: block;
    } */
    #product1 .pro-contaier {
        justify-content: center;
    }

    #boutique .img .str img {
        /* display: none; */
        flex-direction: row;
        display: block;
        width: 100%;
        max-inline-size: 100%;
        block-size: auto;
    }

    #summer .head {
        font-size: 16px;
    }

    #summer .pro-contaier {
        width: 100%;
        margin: 15px auto;
    }

    #summer .pro-contaier .pro {
        width: 90%;
    }
}
</style>