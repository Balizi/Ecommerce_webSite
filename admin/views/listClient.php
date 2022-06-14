<?php
    $clt=new ClientController();
    $res=$clt->getClient();
        // var_dump($res);
        // die();
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
                    <a href="chercher" >
                        <span class="las la-search"></span>
                        <span>chercher un produit</span>
                    </a>
                </li>
                <li>
                    <a href="listClient" class="active">
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
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>list des Client</h3>
                        </div>
                                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="80%" class="content-table">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Genre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($res as $val):?>
                                            <tr>
                                                <td data-label="Id"><?= $val['nom']?></td>
                                                <td data-label="Nom"><?= $val['prenom']?></td>
                                                <td data-label="Prix"><?= $val['email']?></td>
                                                <td data-label="Catégorie"><?= $val['tele'];?></td>
                                                <td data-label="Catégorie"><?= $val['genre']?></td>
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