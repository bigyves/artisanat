<?php 
 //verifier si une session existe
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }

   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
//include('connectionDB.php');

include_once('model/connectionDB.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="asset/css/styles.css">
   

  <title>Artisanat du burundi </title>
</head>
<body class="d-flex flex-column min-h-100vh text-dark" style="background-color:white ;" >




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Acceuil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos de nous</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">vannerie</a></li>
            <li><a class="dropdown-item" href="#">poterie</a></li>

                        <li><a class="dropdown-item" href="#">tissage </a></li>
                                    <li><a class="dropdown-item" href="#">bijouterie</a></li>
                                                <li><a class="dropdown-item" href="#">culpture sur bois</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Autres</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
       <br><br>




        <ul class="navbar-nav me-auto">
        <li class="nav-item">


          <a href="asset/view/css/panier.php" data-bs-toggle="modal" data-bs-target="#exampleModaltete" class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Panier&nbsp; <span class="badge text-bg-primary rounded-pill"><?=array_sum($_SESSION['panier'])?></span></a>

        </li>
      </ul>

        <ul class="navbar-nav me-auto">
        <li class="nav-item">

             <a class="btn btn-success" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">se connecter&nbsp;&nbsp;</a>
          <a class="btn btn-success" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalheader" data-bs-whatever="@mdo">creer un compte</a>
       
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- creer connexion modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Connexion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Utilisateur:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mot de Passe:</label>
            <input type="password" placeholder="Entrer votre mot de passe" class="form-control" id="recipient-name">
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>





<!-- creer un compte modal -->


<div class="modal fade" id="exampleModalheader" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Creer un Compte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>


                    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Prenom:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

                    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Adresse:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

                    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">tel:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

                  <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

                    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Utilisateur:</label>
            <input type="text" placeholder="Entrer votre nom d utilisateur" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Mot de Passe:</label>
            <input type="password" placeholder="Entrer votre mot de passe" class="form-control" id="recipient-name">
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>





<!-- panier modal -->

<div class="modal fade" id="exampleModaltete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Panier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
<table class="table table-hover">

  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Designation</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

 <?php 
              $total = 0 ;
       $i = 1 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($db, "SELECT * FROM produit WHERE PRODUIT_ID IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['PRIXVENTE'] * $_SESSION['panier'][$product['PRODUIT_ID']] ;
                ?>

    <tr>
      <td><?=$i?></td>
      <td><img style="width:50px;height:50px;" src="administrator/asset/imagesuploadedf/<?=$product['IMAGE']?>"></td>
      <td><?=$product['DESIGNATION']?></td>
      <td><?=$product['PRIXVENTE']?></td>

  <td><?=$_SESSION['panier'][$product['PRODUIT_ID']] // Quantité?></td>
  <td><a href="index.php?del=<?=$product['PRODUIT_ID']?>"><img style="width:20px;height:30px;"src="asset/image/delete.png"></a></td>

    </tr>

            <?php 
            $i++;
          endforeach ;} 
         

            ?>

    <tr>
     <th scope="row">Total</th>
     <td ></td>
     <td ></td>
     <td ></td>
     <td ><?=$total?></td>

    </tr>

  </tbody>
</table>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" type="button" class="btn btn-primary">Commander</button>
      </div>
    </div>
  </div>
</div>



