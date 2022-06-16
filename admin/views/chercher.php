<?php    

    if(isset($_POST['search']))
    {
        $pr=new ProductController();
        $res=$pr->search();
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
                    <a href="index">
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
                    <a href="chercher" class="active">
                        <span class="las la-search"></span>
                        <span>chercher un produit</span>
                    </a>
                </li>
                <li>
                    <a href="listClient">
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
            </h2>
            <div class="user-wrapper">
                <img src="./public/img/user.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4> <?=$_SESSION['username']?></h4>
                    <a href="logout"><small>Déconexion</small></a>
                </div>
            </div>
        </header>

        <div class="con">
            <div class="contain">
                <div class="contact-box">
                    <form method="POST" action="">
                        <input name="key" type="text" class="field" placeholder="chercher" id="nom" required>
                        <button type="submit" name="search">chercher</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table width="80%" class="content-table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Categorie</th>
                            <th>Genre</th>
                            <th width="10px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_POST['search'])){?>
                            <?php if($res){?>
                                <?php foreach($res as $val):?>
                                <tr>
                                    <td data-label="Id"><?= $val['titre']?></td>
                                    <td data-label="Nom"><?= $val['description']?></td>
                                    <td data-label="Prix"><?= $val['prix']?></td>
                                    <td data-label="Catégorie"><?= $val['categorie']?></td>
                                    <td data-label="Catégorie"><?= $val['genre']?></td>
                                    <td class="fr">
                                        <form action="update" method="post">
                                            <input type="hidden" name="idd" value="<?= $val['idArticle']?>" />
                                            <span class="action_btn">
                                                <button type="submit" name="id">Modifier</button>
                                            </span>
                                        </form>
                                        <form action="deleteProduct" method="post">
                                            <input type="hidden" name="idd" value="<?= $val['idArticle']?>" />
                                            <span class="action_btn"> 
                                                <button type="submit" name="id">Supprimer</button>
                                            </span>
                                        </form>
                                </tr>
                                <?php endforeach;?>
                            <?php }?>
                        <?php }?>
                    </tbody>
                </table>
            </div> 
        </div>

    </div>



