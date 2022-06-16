<?php

    $prv=new ProductController();
    $ProduiteVendu=$prv->ProduitVendu();
    $ProduitsDispo=$prv->AllPr();

    $clt=new ClientController();
    $res=$clt->getClient();


?>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Rymo</span></h2>
        </div>

        <div class="sidebare-menu">
            <ul>
                <li>
                    <a href="index" class="active">
                        <span class="las la-igloo"></span>
                        <span>DashBoard</span>
                    </a>
                </li>
                <li>
                    <a href="home">
                        <span class="las la-shopping-bag"></span>
                        <span>List des Produit Home</span>
                    </a>
                </li>
                <li>
                    <a href="listfemme">
                        <span class="las la-shopping-bag"></span>
                        <span>List des Produit Femme</span>
                    </a>
                </li>
                <li>
                    <a href="add">
                        <span class="las la-clipboard-list"></span>
                        <span>Ajouter un Produit</span>
                    </a>
                </li>
                <li>
                    <a href="chercher">
                        <span class="las la-search"></span>
                        <span>chercher un produit</span>
                    </a>
                </li>
                <li>
                    <a href="listClient" >
                        <span class="las la-user-edit"></span>
                        <span>list des Client</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                <!-- Dashboard -->
            </h2>
            <div class="user-wrapper">
                <img src="./public/img/user.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4> <?=$_SESSION['username']?></h4>
                    <a href="logout"><small>Déconexion</small></a>
                </div>
            </div>
        </header>
    
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?= count($res)?></h1>
                        <span>Client</span>
                    </div>
                    <div>
                        <span class="las la-user-circle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?= $ProduitsDispo?></h1>
                        <span>produits Disponible en stock</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1><?=$ProduiteVendu?></h1>
                        <span>Produite Vendu</span>
                    </div>
                    <div>
                        <span class="las la-shopping-cart"></span>
                    </div>
                </div>

            </div>
        </main>
    </div>