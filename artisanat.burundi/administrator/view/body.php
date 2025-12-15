<?php
//include('connectionDB.php');

include_once('../model/connectionDB.php');

?>
<br><br><br>
<table>
     <tr>
       <th scope="col">LISTES DES PRODUITS <a href="view/addProduct.php"><span class="btn btn-success btn-sm">Ajouter</span></a></th>
      </tr>
</table>
<br><br>

<table class="table table-striped">
  <thead>

    <tr>
      <th scope="col">NO</th>
      <th scope="col">IMAGE </th>
      <th scope="col">DESIGNATION</th>
      <th scope="col">P ACHAT</th>
      <th scope="col">P VENTE</th>
      <th scope="col">P PROMOTION</th>
      <th scope="col">QUANTITE</th>
      <th scope="col">CODE </th>
      <th scope="col">ACTION </th>
    </tr>
  </thead>
  <tbody>

  
<?php

$i=1;
$sql = "SELECT * FROM produit"; // Query to get image filenames
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
?>


    <tr>
      <td><?php echo  $i; ?></td>
      <td> <?php $imagePath = "asset/imagesuploadedf/" . $row["IMAGE"]; // Prepend the folder path
    // Display the image using an HTML <img> tag
    echo '<img src="' . $imagePath . '" alt="Image" style="width:100px;height:auto;">';


     ?>

</td>
      <td><?php echo  $row['DESIGNATION']; ?></td>
      <td><?php echo  $row['PRIXACHAT']; ?></td>
      <td><?php echo  $row['PRIXVENTE']; ?></td>
      <td><?php echo  $row['PROMO']; ?></td>
      <td><?php echo  $row['QUANTITE']; ?></td>
      <td><?php echo  $row['CODE']; ?></td>

      <td>
           <button type="button" class="btn btn-info btn-sm">Detail</button>
           <button type="button" class="btn btn-warning btn-sm"> Modifier</button>
           <button type="button"  onclick="myFunction()" id="del" class="btn btn-danger btn-sm">Supprimer</button>
     </td>
  </tr>

   

<?php

$i++;

  }
} else {
  echo "No record found.";
}
$db->close();
?>






  </tbody>
</table>


<script>

function myFunction() {
  var txt;
  if (confirm("Voudriez-vous vraiment supprimer?")) {
    //txt = "You pressed OK!";
  } else {
    //txt = "You pressed Cancel!";
  }
  //document.getElementById("demo").innerHTML = txt;
}

</script>


