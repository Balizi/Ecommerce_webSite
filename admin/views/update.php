<?php

    if(isset($_POST['id']))
    {
        $data=new ProductController();
        $res=$data->getOne();
        // var_dump($res);
        // die();
    }

    if(isset($_POST['update']))
    {
        $data=new ProductController();
        $data->ControlleUpdate();
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
                    <a href="update" class="active">
                        <span class="las la-edit"></span>
                        <span>Modifer un Produit</span>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <span class="las la-search"></span>
                        <span>chercher un produit</span>
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
                    <h4>User Name</h4>
                    <a href="logout.php"><small>Déconexion</small></a>
                </div>
            </div>
        </header>
    </div>

    <div class="con">
        <div class="contain">
            <div class="contact-box">
                <form method="POST" >
                    <input type="hidden" value="<?=$res->idArticle?>" name="idArt">
                    <input name="titre" value="<?= $res->titre;?>" type="text" class="field" placeholder="Titre" id="nom" required>
                    <input name="prix" value="<?= $res->prix;?>" type="number" class="field" placeholder="Prix" id="prix" required>
                    <input name="categorie" value="<?= $res->categorie;?>" type="text" class="field" placeholder="Catégorie" id="Catégorie" required>
                    <input name="genre" value="<?= $res->genre;?>" type="text" class="field" placeholder="Genre" id="Catégorie" required>
                    <textarea name="description" placeholder="Description" class="field" id="message" required><?= $res->description;?></textarea>

                    <div class="div_fill">
                        <p id="text">telecharger image</p>
                        <input accept=".jpg, .jpeg, .png" type="file" name="image" id="btn_envira" require>
                    </div>
                    <button type="submit" name="update">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    