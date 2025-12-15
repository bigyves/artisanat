
<?php

include_once('head.php');


?>

<div class="container">

<h2> Creer un Produit</h2>
<div class="row">
<div class="col-sm-5" style="background: pink">
<div class="panel-body">
<form role="form" method="POST"action="../controller/addProduct.php" enctype="multipart/form-data">

<div class="form-group">
<label for="tache">Designation</label>
<input class="form-control" id="tache" name="designation" placeholder="Enter Designation" type="text">
</div>

<div class="form-group">

	<label for="tache">Categorie</label>
<select name="cat" class="form-select" aria-label="Default select example">



  <option selected value="1">vannerie</option>
  <option value="2">poterie</option>
  <option value="3">culpture sur bois</option>


</select>


</div>

<div class="form-group">
<label for="tache">prix achat</label>
<input class="form-control" id="tache" name="prixa" placeholder="Enter un Prix Achat" type="text" >
</div>
<div class="form-group">
<label for="tache">prix vente</label>
<input class="form-control" id="tache" name="prixv" placeholder="Enter un Prix vente" type="text" >
</div>


<div class="form-group">
<label for="tache">promotion</label>
<input class="form-control" id="tache" name="promo" placeholder="Enter un Prix promotion" type="text" >
</div>


<div class="form-group">
<label for="tache">quantite</label>
<input class="form-control" id="tache" name="quantite" placeholder="Enter la Quantite" type="text" >
</div>



<div class="form-group">
<label for="date1">code produit</label>
<input class="form-control" id="date1" name="code" placeholder="Enter le Code Produit" type="text" >
</div>

<div class="form-group">
<label for="date1">Image</label>
<input class="form-control" id="date1" name="uploadfile" placeholder="Enter Image Produit" type="file" >
</div>

<div class="form-group">
<label for="date1">Description</label>
<input class="form-control" id="date1" name="description" placeholder="Enter le Code Produit" type="text" >
</div>
<br>
<button type="submit" name="senddata" class="btn btn-info">Submit</button>

</form>


</h1><?php
   $code ="";
   if ($code!="")
echo $code;


?></h1>

</div>
<br>
</div>
</div>
</div>


<?php

include_once('../view/foot.php');


?>
