
<!-- carousel slide -->


 <main class="flex-grow-1">


  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="asset/image/caroline.jpg" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-4">
          <p class="mt-5 fs-3 text-uppercase">Un petit bouquet de fleurs dans une bouteille en verre.</p>
          <h1 class="display-1 fw-bolder text-capitalize">Un petit bouquet</h1>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Detail</button>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="asset/image/amercansta.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">Statut De La Liberté À New York</p>
          <p class="display-1 fw-bolder text-capitalize">Symbole Américain</p>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Detail</button>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="asset/image/raymond.jpg" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-4">
          <p class="text-uppercase fs-3 mt-5">Décoration de Noël</p>
          <p class="display-1 fw-bolder text-capitalize">Douceur poudrée</p>
          <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Detail</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




<?php

$i=1;
$sql = "SELECT * FROM produit"; // Query to get image filenames
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
?>


<div class="card" style="width: 18rem;float: left; margin: 12px;">
  


       <?php $imagePath = "administrator/asset/imagesuploadedf/" . $row["IMAGE"]; // Prepend the folder path
    // Display the image using an HTML <img> tag

       $titre =$row['DESIGNATION'];

    echo '<img src="'. $imagePath . '" style="width:auto;height:auto;" class="card-img-top" alt="'. $titre . '">';


     ?>

  <div class="card-body">
    <h5 class="card-title"><?php echo  $row['DESIGNATION']; ?></h5>
    <p class="card-text"><?php echo  $row['DESCRIPTION']. '<br> <span style="text-decoration: line-through red; ">'.$row['PRIXVENTE'].'BIF</span>&nbsp;&nbsp;'. $row['PROMO'].'&nbsp;BIF<br>'; ?> </p>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $row['PRODUIT_ID']; ?>" type="submit">Detail</button>
  </div>
</div>



<!-- Detail produit modal -->

<div class="modal fade" id="exampleModal<?php echo  $row['PRODUIT_ID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail du produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


       <?php $imagePath = "administrator/asset/imagesuploadedf/" . $row["IMAGE"]; // Prepend the folder path
    // Display the image using an HTML <img> tag

       $titre =$row['DESIGNATION'];

    echo '<img src="'. $imagePath . '" style="width:auto;height:auto;" class="card-img-top" alt="'. $titre . '">';


     ?>
<br>
   

<h5><?php echo  $row['DESIGNATION']; ?></h5>


<?php echo  $row['DESCRIPTION']; ?>
<br>

<?php echo '<span style="text-decoration: line-through red; ">'. $row['PRIXVENTE'].'&nbsp;BIF</span>'; ?>
   &nbsp;&nbsp;&nbsp;
<?php echo  $row['PROMO'].'&nbsp;BIF'; ?>

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


<a type="button" class="btn btn-primary" href="controller/ajouter_panier.php?id=<?=$row['PRODUIT_ID']?>">Ajouter dans le Panier</a>

      </div>
    </div>
  </div>
</div>




<?php



  }
} else {
  echo "No record found.";
}
$db->close();
?>
</main>