<?php
    if(isset($_POST['add']))
    {
        $prd=new ProductController();
        $prd->addProduct();
        // die();
    }


?>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span> <span>Rymo</span></h2>
        </div>

        <div class="sidebare-menu">
            <ul>
                <li>
                    <a href="index" >
                        <span class="las la-igloo"></span>
                        <span>DashBoard</span>
                    </a>
                </li>
                <li>
                    <a href="home">
                        <span class="las la-shopping-bag"></span>
                        <span>List des Produit home</span>
                    </a>
                </li>
                <li>
                    <a href="listfemme" >
                        <span class="las la-shopping-bag"></span>
                        <span>List des Produit Femme</span>
                    </a>
                </li>
                <li>
                    <a href="add" class="active">
                        <span class="las la-clipboard-list"></span>
                        <span>Ajouter un Produit</span>
                    </a>
                </li>
                <li>
                    <a href="chercher" >
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
                    <a href="logout.php"><small>Déconexion</small></a>
                </div>
            </div>
        </header>
    </div>

    <div class="con">
        <div class="contain">
            <div class="contact-box">
                <form method="POST" action="">
                    <input name="titre" type="text" class="field" placeholder="Titre" id="nom" required>
                    <input name="prix" type="number" class="field" placeholder="Prix" id="prix" required>
                    <input name="categorie" type="text" class="field" placeholder="Catégorie" id="Catégorie" required>
                    <input name="genre" type="text" class="field" placeholder="Genre" id="Catégorie" required>
                    <textarea name="description" placeholder="Description" class="field" id="message" required></textarea>

                    <div class="div_fill">
                        <p id="text">telecharger image</p>
                        <input accept=".jpg, .jpeg, .png" type="file" name="image" id="btn_envira">
                    </div>
                    <button type="submit" name="add">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    