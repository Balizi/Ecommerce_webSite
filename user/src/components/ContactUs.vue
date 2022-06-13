<template>
    <HeaderVue />
    
    <!-- Start Main -->
    <main class="contain">
		<section class="contact-box">
			<div class="left"></div>
            <form >
                <div class="right">
                    <h2>Contact Us</h2>
                    <input type="text" class="field" placeholder="Nom" id="nom" v-model="this.contact.nom" required>
                    <input type="email" class="field" placeholder="Email" id="email" v-model="this.contact.email" required>
                    <input type="text" class="field" placeholder="Sujet" id="sujet" v-model="this.contact.sujet" required>
                    <textarea placeholder="Message" class="field" id="message" v-model="this.contact.message" required></textarea>
                    <button class="btn" @click.prevent="Env()">Envoyer</button>
                </div>
            </form>
		</section>
    </main>
    <!--End Main-->
    <FooterVue />
</template>
<script>
import HeaderVue from './HeaderVue.vue';
import FooterVue from './FooterVue.vue';
import axios from 'axios';
export default {
    name:'ContactUs',
    components:{
        HeaderVue,
        FooterVue,
    },
    data() {
        return {
            contact:{
                nom:null,
                email:null,
                sujet:null,
                message:null,
            }
        }
    },
    methods: {
        Env()
        {
            let userLogeed=JSON.parse(localStorage.getItem("userInfo"));
            if(!userLogeed)
            {
                this.$router.push({name:'LoginUser'})
            }else{
                axios.post('http://localhost/1FilRouge/apiuser/api/client/contact.php',{
                    nom:this.contact.nom,
                    email:this.contact.email,
                    sujet:this.contact.sujet,
                    message:this.contact.message,
                    idClient:userLogeed.idClent
                }).then(res=>{
                    if(res.data.message == "contact")
                    {
                        alert('Message Envoyer');
                        this.$router.push({name:"HomeVue"});
                    }
                })
                this.contact={}
            }

        }
    },
}
</script>
<style scoped>

.contain{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.contain:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("./../assets/img/CBg.jpg") no-repeat center;
	background-size: cover;
	z-index: -1;
}

.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
    opacity: 0.9;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("./../assets/img/21800.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #A9C52F;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #A9C52F;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #A9C52F;
}

.field:focus{
    border: 2px solid #228896;
    background-color: #fff;
}

@media (max-width: 768px){
    .contact-box{
        padding-top: 20%;
    }
    .contact-box .left{
        display: none;
    }
}

</style>