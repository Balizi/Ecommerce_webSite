<template>
    <div class="pannel">
        <HeaderVue />
        <section id="cart" class="section-p1" >
            <table width="100%">
                <thead>
                    <tr>
                        <td>Supprimer</td>
                        <td>Image</td>
                        <td>Titre</td>
                        <td>Prix</td>
                        <td>QUANTITY</td>
                        <td>Categorie</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="dt in data" :key="dt.idArticle">
                        <td > <a @click="removeItem(dt)" href="#"><i class="far fa-times-circle"></i></a></td>
                        <!-- <td > <a @click="delet(dt.id)" href="#"><i class="far fa-times-circle"></i></a></td> -->
                        <td v-if="dt.genre == 'Homme'"><img :src="require(`./../assets/img/product/homme/${dt.image}`)" alt=""></td>
                        <td v-if="dt.genre == 'femme'"><img :src="require(`./../assets/img/product/femme/${dt.image}`)" alt=""></td>
                        <td v-if="dt.genre == 'enfant'"><img :src="require(`../assets/img/product/enfant/${dt.image}`)" alt=""></td>
                        <td>{{dt.titre}}</td>
                        <td>{{dt.prix}} MAD</td>
                        <td><input type="number" min="1" @change="totale()" name="" :value="dt.qte" id=""></td>
                        <td>{{dt.categorie}}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        

        <section id="cart-add" class="section-p1" v-if="this.data != null">
            <div id="subtotal" >
                <h3>Cart Totale</h3>
                <table>
                    <tr>
                        <td>Cart Totale</td>
                        <td>{{this.s}} MAD</td>
                    </tr>
                    <tr>
                        <td>Livraison</td>
                        <td>Gratuite</td>
                    </tr>
                    <tr>
                        <td><strong>Totale</strong></td>
                        <td><strong>{{this.s}} MAD</strong></td>
                    </tr>
                </table>
                <button class="normal cl" @click="By()" >FINALISER LA COMMANDE</button>
            </div>
        </section>



        <div id="simpleModal" class="moda">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 style="text-transform: capitalize;">{{this.useInfo.nom}} {{this.useInfo.prenom}}</h2>
                    <span id="closeBtn">&times;</span>
                </div>
                <div class="modal-body">
                    <p>Bonjoure</p>
                    <p>Votre commande à être passer</p>
                </div>
            </div>
        </div>
        
        <FooterVue />
    </div>
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import FooterVue from "./FooterVue.vue";
import axios from 'axios';
export default {
  name: "PanierVue",
  data() {
    return {
      data: [],
      useInfo:[],
      s:0,
      f:0,
    };
  },
  components: {
    HeaderVue,
    FooterVue,
  },
  mounted() {
    this.getData();
    this.totale();
  },
  methods: {
    getData()
    {
        this.data=JSON.parse(localStorage.getItem('produite'));
    },
    saveData(data)
    {
        data=this.data;
        localStorage.setItem('produite',JSON.stringify(data));
    },
    removeItem(x)
    {
        let index=this.data.indexOf(x);
        this.data.splice(index,1);
        console.log(x.id);
        this.saveData(x);
        let produitepanier = JSON.parse(localStorage.getItem("userInfo"));
        if (produitepanier) 
        {
            this.deletPr(x);
        }
        this.$store.state.nb=JSON.parse(localStorage.getItem("produite"));
        this.s=0;
        this.totale();
    },
    By()
    {
        let userLogeed=JSON.parse(localStorage.getItem("userInfo"));
        this.useInfo=userLogeed;
        
        var modal=document.getElementById('simpleModal');
        if(!userLogeed)
        {
            this.$router.push({name:'LoginUser'})
        }else{
            this.data.forEach(val=>{
                axios.post("http://localhost/1FilRouge/apiuser/api/article/commander.php",{
                    idArticle:val.idArticle,
                    idClient:userLogeed.idClent
                }).then((res)=>{
                    console.log(res.data.message);
                })
            })
            localStorage.removeItem('produite');
            modal.style.display='block';
            this.delete();
            this.getData();
            // this.$forceUpdate();
        }

        document.querySelector('#closeBtn').addEventListener('click',()=>{
            modal.style.display='none';
        })
        
    },
    totale()
    {
        if(this.data !=null)
        {
            this.data.forEach(dt=>{
                this.s+=(dt.prix*dt.qte);
            })
        }
    },
    deletPr(x)
    {
        axios.delete('http://localhost/1FilRouge/apiuser/api/article/deletecart.php?id='+x.id).then((res)=>{
            console.log(res.data);
        })
    },
    delete()
    {
        axios.delete('http://localhost/1FilRouge/apiuser/api/article/delete.php');
    }
  },
};
</script>
<style scoped>

.button{
    background: coral;
    padding: 1em 2em;
    color: #fff;
    border: 0;
    
}

.button:hover{background: #333;}

.moda{
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    overflow: auto;
    background-color: rgba(0, 0,0,0.5);
}

.modal-content{
    background-color: #f4f4f4;
    margin: 20% auto;
    width: 400px;
    box-shadow: 0 5px 8px 0 rgba(0, 0,0,0.2),
                0 7px 20px 0 rgba(0, 0,0,0.17);
}

.modal-header h2{margin: 0;}

.modal-header{background: #228896;padding: 15px;color: #fff;}

.modal-body{padding: 10px 20px;}

.modal-footer{
    background: coral;
    padding: 15px;
    color: #fff;
    /* text-align: center; */
}

.modal-footer h3{margin: 0;}

#closeBtn{
    /* color: #ccc; */
    float: right;
    font-size: 30px;
    color: #fff;
}

#closeBtn:hover,#closeBtn:focus{color: #000;text-decoration: none;cursor: pointer;}



/* Cart Page */
.pannel{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* width: 100vw; */
    min-height: 100vh;
}

#cart{
    overflow-x: auto;
    height: 100%;
}

#cart table{
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
    white-space: nowrap;
}

#cart table img{
    width: 70px;
}

#cart table td:nth-child(1){
    width: 100px;
    text-align: center;
}

#cart table td:nth-child(2){
    width: 150px;
    text-align: center;
}

#cart table td:nth-child(3){
    width: 250px;
    text-align: center;
}

#cart table td:nth-child(4),
#cart table td:nth-child(5),
#cart table td:nth-child(6){
    width: 150px;
    text-align: center;
}

#cart table td:nth-child(5) input{
    width: 70px;
    padding: 10px 5px 10px 15px;
}

#cart table thead{
    border: 1px solid #228896;
    border-left: none;
    border-right: none;
}

#cart table thead td{
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    padding: 18px 0;
}

#cart table tbody tr td{
    padding-top: 15px;
}

#cart table tbody td{
    font-size: 13px;
}

#cart-add{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

#cart-add{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

#cupon{
    width: 50%;
    margin-bottom: 30px;
}

#cupon h3,
#subtotal h3{
    padding-bottom: 15px;
}

#cupon input{
    padding: 10px 20px;
    outline: none;
    width: 60%;
    margin-right: 10px;
    border: 1px solid #e2e9e1;
}

#cupon button,
#subtotal button{
    background-color: #228896;
    color: #fff;
    padding: 12px 20px;
}

#subtotal{
    width: 50%;
    margin-bottom: 30px;
    border: 1px solid #e2e9e1;
    padding: 30px;
}

#subtotal table{
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}

#subtotal table td{
    width: 50%;
    border: 1px solid #e2e9e1;
    padding: 10px;
    font-size: 13px;
}
</style>