<?php

    if(isset($_POST['submit']))
    {
        $create=new AdminController();
        $create->register();
    }
?>

<style>
    body{
        /* background: rgb(161, 161, 252); */
        background-image: url('./public/img/bg.jpg');
        background-size: cover;
    }

    section{
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
    }

    section .contentBx{
        justify-content: center;
        align-items: center;
        display: flex;
        width: 50%;
        height: 100%;
        margin: auto;
    }

    section .contentBx .formBx{
        width: 50%;
        background-color: white;
        opacity: 0.9;
        padding: 20px 10px;
        border-radius: 10px;
    }

    section .contentBx .formBx h2{
        color: #607d8b;
        font-weight: 600;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #088178;
        display: inline-block;
        letter-spacing: 1px;
    }

    section .contentBx .formBx .inputBx{margin-bottom: 20px;}

    section .contentBx .formBx .inputBx span{
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607d8b;
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 1px;
    }

    section .contentBx .formBx .inputBx input
    {
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

    section .contentBx .formBx .inputBx input[type="submit"]
    {
        background: #088178;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
    }

    section .contentBx .formBx .inputBx input[type="submit"]:hover{background: #a9c52f;}

    section .contentBx .formBx .remember
    {
        margin-bottom: 10px;
        color: #607d8b;
        font-weight: 400;
        font-size: 14px;
    }

    section .contentBx .formBx .inputBx p{color: #0a0a0a;}

    section .contentBx .formBx .inputBx p a{color: #088178;}

    section .contentBx .formBx h3
    {
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }

    section .contentBx .formBx .sci{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section .contentBx .formBx .sci li i{
        font-size: 40px;
        transform: scale(0.5);
        filter: invert(1);
    }

    section .contentBx .formBx .sci li{
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

    section .contentBx .formBx .sci li:hover{background: #a9c52f;}

    @media (max-width: 768px)
    {
        section .contentBx{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        section .contentBx .formBx{
            width: 100%;
            padding: 40px;
            background: rgba(247, 241, 241, 0.9);
            margin: 50px;
        }
        section .contentBx .formBx h3{
            color: #607d8b;
            text-align: center;
            margin: 30px 0 10px;
            font-weight: 500;
        }
    }

</style>

<section>
    <div class="contentBx">
        <div class="formBx">
            <h2>S’inscrire</h2>
            <form method="post">
                <div class="inputBx">
                    <span>Nom *</span>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div class="inputBx">
                    <span>Prenom *</span>
                    <input type="text" name="prenom" placeholder="Prenom" required>
                </div>
                <div class="inputBx">
                    <span>Email *</span>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="inputBx">
                    <span>Mot de passe *</span>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </div>
                <div class="remember">
                    <label for="id"><input type="checkbox" name="" id="id">Remember me</label>
                </div>
                <div class="inputBx">
                    <input type="submit" name="submit" value="S’inscrire">
                </div>
                <div class="inputBx">
                    <p><a href="login">Se Connecter</a></p>
                </div>
            </form>
        </div>
    </div>
</section>