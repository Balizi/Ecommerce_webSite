<?php
    if(isset($_POST['add']))
    {
        $prd=new ProductController();
        $prd->addProduct();
        // die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/Add_Pr_style.css">
</head>
<body>
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
                    <a href="search.php" >
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
    
</body>
</html