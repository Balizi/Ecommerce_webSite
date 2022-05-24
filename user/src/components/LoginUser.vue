<template>
  <HeaderVue />
  <section>
    <div class="imgBx">
      <img src="./../assets/img/bg.jpg" alt="" />
    </div>
    <div class="contentBx">
      <div class="formBx">
        <h2>Login</h2>
        <form>
          <div class="inputBx">
            <span>Email</span>
            <input type="email" v-model="this.info.email" placeholder="Entre votre email" required />
          </div>
          <div class="inputBx">
            <span>Mot de passe</span>
            <input type="password" v-model="this.info.password" placeholder="Entre votre mot de passe" required />
          </div>
          <div class="remember">
            <label for="id"
              ><input type="checkbox" name="" id="id" />Remember me</label
            >
          </div>
          <div class="inputBx">
            <input type="submit" @click.prevent="login()" value="Sign In" />
          </div>
          <div class="inputBx">
            <p>
              Don't have an account?<router-link to="/register">Sign up</router-link>
            </p>
          </div>
          <h3>Login with social media</h3>
          <ul class="sci">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-google-plus"></i></li>
          </ul>
        </form>
      </div>
    </div>
  </section>
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import axios from "axios";
export default {
  name: "LoginUser",
  components: {
    HeaderVue,
  },
  data() {
    return {
      em:this.$route.params,
      info:{
        email:null,
        password:null
      },
      client:[]
    }
  },
  mounted() {
    this.Controle();
    console.log(this.$route.params);
  },
  methods: {
    Controle() {
      let produitepanier = JSON.parse(localStorage.getItem("user"));
      if (produitepanier) {
        this.$router.push({ name: "HomeVue" });
      }
    },
    login()
    {
      axios.post('http://localhost/1FilRouge/apiuser/api/client/login.php',{
        email:this.info.email,
        password:this.info.password
      }).then((response)=>{
        if(response.data.message === "success")
        {
          this.client=response.data.dt;
          localStorage.setItem("user",JSON.stringify(this.client));
          this.$router.push({ name: "HomeVue" });
        }
        // console.log(response.data.message);
      })
      // console.log(this.info);
    }
  },
};
</script>
<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section {
  position: relative;
  width: 100%;
  height: 94.2vh;
  display: flex;
}

section .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
}

section .imgBx::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* background: linear-gradient(225deg,#4de91e,#03a9f4); */
  z-index: 1;
  mix-blend-mode: screen;
}

section .imgBx img {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .contentBx {
  justify-content: center;
  align-items: center;
  display: flex;
  width: 50%;
  height: 100%;
}

section .contentBx .formBx {
  width: 50%;
}

section .contentBx .formBx h2 {
  color: #607d8b;
  font-weight: 600;
  font-size: 1.5em;
  text-transform: uppercase;
  margin-bottom: 20px;
  border-bottom: 4px solid #088178;
  display: inline-block;
  letter-spacing: 1px;
}

section .contentBx .formBx .inputBx {
  margin-bottom: 20px;
}

section .contentBx .formBx .inputBx span {
  font-size: 16px;
  margin-bottom: 5px;
  display: inline-block;
  color: #607d8b;
  font-weight: 300;
  font-size: 16px;
  letter-spacing: 1px;
}

section .contentBx .formBx .inputBx input {
  width: 100%;
  padding: 10px 20px;
  outline: none;
  font-weight: 400;
  border: 1px solid #607d8b;
  font-size: 16px;
  letter-spacing: 1px;
  color: #607d8b;
  background: transparent;
  border-radius: 30px;
}

section .contentBx .formBx .inputBx input[type="submit"] {
  background: #088178;
  color: #fff;
  outline: none;
  border: none;
  font-weight: 500;
  cursor: pointer;
}

section .contentBx .formBx .inputBx input[type="submit"]:hover {
  background: #a9c52f;
}

section .contentBx .formBx .remember {
  margin-bottom: 10px;
  color: #607d8b;
  font-weight: 400;
  font-size: 14px;
}

section .contentBx .formBx .inputBx p {
  color: #607d8b;
}

section .contentBx .formBx .inputBx p a {
  color: #088178;
}

section .contentBx .formBx h3 {
  color: #607d8b;
  text-align: center;
  margin: 80px 0 10px;
  font-weight: 500;
}

section .contentBx .formBx .sci {
  display: flex;
  justify-content: center;
  align-items: center;
}

section .contentBx .formBx .sci li i {
  font-size: 40px;
  transform: scale(0.5);
  filter: invert(1);
}

section .contentBx .formBx .sci li {
  list-style: none;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #088178;
  border-radius: 50%;
  margin: 0 7px;
  cursor: pointer;
}

section .contentBx .formBx .sci li:hover {
  background: #a9c52f;
}

@media (max-width: 768px) {
  section .imgBx {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  section .contentBx {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    z-index: 1;
  }
  section .contentBx .formBx {
    width: 100%;
    padding: 40px;
    background: rgba(247, 241, 241, 0.9);
    margin: 50px;
  }
  section .contentBx .formBx h3 {
    color: #607d8b;
    text-align: center;
    margin: 30px 0 10px;
    font-weight: 500;
  }
}
</style>