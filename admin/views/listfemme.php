<?php
    $data=new ProductController();
    $res=$data->getProductFemme();
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
                    <a href="home" >
                        <span class="las la-shopping-bag"></span>
                        <span>List des Produit home</span>
                    </a>
                </li>
                <li>
                    <a href="listfemme" class="active">
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
                    <h4><?=$_SESSION['username']?></h4>
                    <a href="logout.php"><small>Déconexion</small></a>
                </div>
            </div>
        </header>

        <main>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>List des Produite Femme</h3>

                            <!-- <button >Ajouter Produit <span class="las la-arrow-right"></span></button> -->
                        </div>
                                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="80%" class="content-table">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Categorie</th>
                                            <th>Genre</th>
                                            <th>Prix</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th width="10px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($res as $value):?>
                                        <tr >
                                            <td data-label="Id"><?= $value['titre']?></td>
                                            <td data-label="Nom"><?= $value['categorie']?></td>
                                            <td data-label="Prix"><?= $value['genre']?></td>
                                            <td data-label="Catégorie"><?= $value['prix']." MAD";?></td>
                                            <td data-label="Catégorie"><?= $value['description']?></td>
                                            <td data-label="Image">
                                                <img src=<?= "public/img/femme/".$value['image']  ?> >
                                            </td>
                                            <td class="fr">
                                                <form action="update" method="post">
                                                    <input type="hidden" name="idd" value="<?= $value['idArticle']?>" />
                                                    <span class="action_btn">
                                                        <button type="submit" name="id">Modifier</button>
                                                    </span>
                                                </form>
                                                <form action="deleteProduct" method="post">
                                                    <input type="hidden" name="idd" value="<?= $value['idArticle']?>" />
                                                    <span class="action_btn"> 
                                                        <button type="submit" name="id">Supprimer</button>
                                                    </span>
                                                </form>
                                                <form action="addImageDetails" method="post">
                                                    <input type="hidden" name="idd" value="<?= $value['idArticle']?>" />
                                                    <span class="action"> 
                                                        <button type="submit" name="id">+</button>
                                                    </span>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
               
            </div>
        </main>
    </div>