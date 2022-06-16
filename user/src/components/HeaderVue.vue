<template>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <router-link to="/" class="navbar-brand"
        ><img src="./../assets/img/logo.png" alt=""
      /></router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#main"
        aria-controls="main"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <div class="dropdown">
            <li class="nav-item">
              <a href="#" class="nav-link p-2 p-lg-3" aria-current="page"
                >Homme</a
              >
            </li>
            <ul class="dropdown-content">
              <li style="color: blue">Vetments</li>
              <li><router-link @click="a" to="/products/chemises/Homme">Chemises</router-link></li>
              <li><router-link to="/products/tricots/Homme">Tricots</router-link></li>
              <li><router-link to="/products/T-shirt/Homme">T-Shirts</router-link></li>
              <li><router-link to="/products/Jeans/Homme">Jeans</router-link></li>
              <li><router-link to="/products/pantalons/Homme">Pantalons</router-link></li>
              <li><router-link to="/products/shorts/Homme">Shorts</router-link></li>
            </ul>
          </div>

          <div class="dropdownf">
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3" href="#">Femme</a>
            </li>
            <ul class="dropdown-contentf">
              <li style="color: blue">Vetments</li>
              <li><router-link to="/products/chemise/femme">Chemisiers</router-link></li>
              <li><router-link to="/products/maternite/femme">Maternité</router-link></li>
              <li><router-link to="/products/tricots/femme">Tricots</router-link></li>
              <li><router-link to="/products/Tuniques/femme">Tuniques</router-link></li>
              <li><router-link to="/products/robes/femme">Robes</router-link></li>
            </ul>
          </div>

          <div class="dropdownen">
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3" href="#">Enfants(4-14ans)</a>
            </li>
            <ul class="dropdown-contenten">
              <li style="color: blue">Garçon</li>
              <li><router-link to="/products/T-shirt/enfant">T-shirt</router-link></li>
              <li><router-link to="/products/Chemise/enfant/">Chemise</router-link></li>
              <li><router-link to="/products/Jeans/enfant/">Jeans</router-link></li>
              <li style="color: blue">Fille</li>
              <li><router-link to="#">Robes</router-link></li>
              <li><router-link to="#">Jupes</router-link></li>
              <li><router-link to="#">Jeans</router-link></li>
            </ul>
          </div>

          <!-- <li class="nav-item">
            <a class="nav-link p-2 p-lg-3" href="#">PROMOTINS</a>
          </li> -->
          <li class="nav-item">
            <router-link class="nav-link p-2 p-lg-3" to="/contact">Contact</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link p-2 p-lg-3" to="/login" v-if="!this.lg">S'identifier</router-link>
            <router-link class="nav-link p-2 p-lg-3" to="#" @click="logout()" v-else>Déconnexion</router-link>
          </li>
        </ul>

        <div class="search ps-3 pe-3 d-none d-lg-block">
          <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          <!-- <router-link to="/paniervue">  <i class="fa-solid fa-cart-shopping"></i><span v-if="this.$store.state.nb.length>0">{{this.$store.state.nb.length}}</span></router-link> -->
          <router-link to="/paniervue">  <i class="fa-solid fa-cart-shopping"></i><span v-if="$store.state.nb != null">{{$store.state.nb.length}}</span></router-link>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: "HeaderVue",
  data() {
    return {
      nb:null,
      lg:false
    }
  },
  mounted() {
    this.con();
  },
  created() {
    // this.count();
  },
  methods: {
    count()
    {
      this.nb=JSON.parse(localStorage.getItem("produite")).length;
    },
    con()
    {
      let produitepanier = JSON.parse(localStorage.getItem("userInfo"));
      if (produitepanier) {
        this.lg=true;
      }
      
    },
    logout()
    {
      localStorage.clear();
      this.$router.push({ name: "HomeVue" });
      this.$store.state.nb=JSON.parse(localStorage.getItem("produite"));
    }
  },
};
</script>
<style >
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap");

:root {
  --dark-color: #19283f;
  --green-color: #33d1cc;
  --red-color: #ff3150;
  --yellow-color: #ffc400;
  --section-color: #eff7fa;
  --green: #088178;
  --bl: #e3e6f3;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Spartan", sans-serif;
}

.search a{
  text-decoration: none;
}

.search a span{
  font-size: 15px;
  text-decoration: none;
}

.section-p1 {padding: 40px 100px;}

/* Start Nav */
.navbar {background-color: #228896;}

.navbar .navbar-nav .nav-link {color: white;font-size: 16px;}

.navbar .navbar-nav .nav-link.active,
.navbar .navbar-nav .nav-link:focus,
.navbar .navbar-nav .nav-link:hover {color: #a9c52f;}

.navbar .search {border-left: 1px solid var(--green-color);}

.navbar .search a {
  padding-left: 10px;
  font-size: 20px;
  color: white;
}

.navbar .search a:hover{color: #a9c52f;}

.navbar .navbar-toggler {
  color: white;
  font-size: 25px;
  border-color: white;
}

.navbar .navbar-toggler:focus {box-shadow: none;}

.navbar .navbar-toggler[aria-expanded="true"] {border-color: var(--green-color);}

.dropdown , .dropdownf , .dropdownen {position: relative;display: inline-block;}

.dropdown-contentf , 
.dropdown-content ,
.dropdown-contenten {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-contentf a, 
.dropdown-content a,
.dropdown-contenten a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover , .dropdown-contentf a:hover , .dropdown-contenten a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content , .dropdownf:hover .dropdown-contentf , .dropdownen:hover  .dropdown-contenten {display: block;}
</style>