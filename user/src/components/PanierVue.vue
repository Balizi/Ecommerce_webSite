<template>
    <div class="pannel">
        <HeaderVue />
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>REMOVE</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>QUANTITY</td>
                        <td>SUBTOTAL</td>
                        <td>Acheter</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="dt in data" :key="dt.idArticle">
                        <td @click="removeItem(x)"> <a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img :src="require(`./../assets/img/product/homme/${dt.image}`)" alt=""></td>
                        <td>Cartoon Astronaut T-Shirts</td>
                        <td>$19.99</td>
                        <td><input type="number" min="1" name="" value="1" id=""></td>
                        <td>20$</td>
                        <td><button @click="By()">Acheter</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <FooterVue />
    </div>
</template>
<script>
import HeaderVue from "./HeaderVue.vue";
import FooterVue from "./FooterVue.vue";
export default {
  name: "PanierVue",
  data() {
    return {
      data: [],
    };
  },
  components: {
    HeaderVue,
    FooterVue,
  },
  mounted() {
    this.getData();
    this.saveData();
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
        this.saveData(x);
    },
    By()
    {
        let produitepanier=JSON.parse(localStorage.getItem("user"));
        if(!produitepanier)
        {
            this.$router.push({name:'LoginUser'})
        }else{
            alert('yes');
        }
    }
  },
};
</script>
<style >
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
#cart table td:nth-child(6),
#cart table td:nth-child(7){
    width: 150px;
    text-align: center;
}

#cart table td:nth-child(5) input{
    width: 70px;
    padding: 10px 5px 10px 15px;
}

#cart table thead{
    border: 1px solid #088178;
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
</style>