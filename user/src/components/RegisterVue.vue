<template>
  <HeaderVue />
  <div class="bd">
    <div class="contai">
      <div class="title">S’inscrire</div>
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input
              type="text"
              v-model="this.client.nom"
              placeholder="Enter votre nom"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Prenom</span>
            <input
              type="text"
              v-model="this.client.prenom"
              placeholder="Enter votre prenom"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input
              type="email"
              v-model="this.client.email"
              placeholder="Enter votre email"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input
              type="text"
              v-model="tele"
              placeholder="Enter votre phone"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input
              type="password"
              v-model="this.client.password"
              placeholder="Entre votre mot de passe"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input
              type="password"
              v-model="this.client.passwor"
              placeholder="Confirm votre mot de passe"
              required
            />
          </div>
        </div>

        <div class="generd-details">
          <input
            type="radio"
            v-model="this.client.genre"
            value="M"
            name="gender"
            id="dot-1"
          />
          <input
            type="radio"
            v-model="this.client.genre"
            value="F"
            name="gender"
            id="dot-2"
          />
          <span class="gender-title">Genre</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input
            type="submit"
            v-on:click.prevent="register()"
            value="S’inscrire"
          />
        </div>
        <router-link to="/login">Ce conecter</router-link>
      </form>
    </div>
  </div>
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import axios from "axios";
export default {
  name: "RegisterVue",
  data() {
    return {
      client: {
        nom: "",
        prenom: "",
        email: "",
        tele: "",
        password: "",
        genre: "",
      },
    };
  },
  components: {
    HeaderVue,
  },
  mounted() {
    this.Controle();
  },
  methods: {
    register() {
      axios
        .post("http://localhost/1FilRouge/apiuser/api/client/register.php", {
          nom: this.client.nom,
          prenom: this.client.prenom,
          email: this.client.email,
          tele: this.tele,
          password: this.client.password,
          genre: this.client.genre,
        })
        .then((response) => {
          if (response.data.message === "compte crié") {
            this.$router.push({
              name: "LoginUser",
              params: { email: this.client.email },
            });
          }
        });
    },
    Controle() {
      let produitepanier = JSON.parse(localStorage.getItem("userInfo"));
      if (produitepanier) {
        this.$router.push({ name: "HomeVue" });
      }
    },
  },
};
</script>
<style >
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.bd {
  display: flex;
  height: calc(100vh - 72px);
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #228896, #a9c52f);
}

.contai {
  max-width: 700px;
  width: 100%;
  background-color: #f5f5f5;
  padding: 25px 30px;
  border-radius: 5px;
}

.contai .title {
  font-size: 25px;
  font-weight: 500;
  border-bottom: 4px solid #228896;
  display: inline-block;
  margin-bottom: 10px;
  position: relative;
}

.contai form .user-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.contai form .user-details .input-box {
  margin: 20px 0 12px 0;
  width: calc(100% / 2 - 20px);
}

.user-details .input-box .details {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 30px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid {
  border-color: #a9c52f;
}

form .generd-details .gender-title {
  font-size: 20px;
  font-weight: 500;
}

form .generd-details .category {
  display: flex;
  width: 30%;
  margin: 14px 0;
  justify-content: space-between;
}

.generd-details .category label {
  display: flex;
  align-items: center;
}

.generd-details .category label .dot {
  height: 18px;
  width: 18px;
  background-color: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 4px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two {
  border-color: red;
  background: black;
}

form input[type="radio"] {
  display: none;
}

form .button {
  height: 45px;
  margin: 45px 0;
}

form .button input {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  letter-spacing: 1px;
  background: linear-gradient(135deg, #228896, #a9c52f);
}

form .button input:hover {
  background: linear-gradient(-135deg, #228896, #a9c52f);
}

@media (max-width: 584px) {
  .contai {
    max-width: 100%;
  }

  .contai form .user-details .input-box {
    margin: 20px 0 12px 0;
    width: 100%;
  }

  form .generd-details .category {
    width: 10%;
  }

  .contai form .user-details {
    max-height: 400px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar {
    width: 0;
  }
}
</style>