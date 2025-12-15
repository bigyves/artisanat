<?php
//include('connectionDB.php');

include_once('../model/connectionDB.php');



$designation=$_POST["designation"];
$prixa=$_POST["prixa"];
$prixv=$_POST["prixv"];
$promo=$_POST["promo"];
$quantite=$_POST["quantite"];
$code=$_POST["code"];
$cat=$_POST["cat"];
$description=$_POST["description"];
 
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = '../asset/imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);



$sql = "INSERT INTO produit (PRODUIT_ID,DESIGNATION,PRIXACHAT,PRIXVENTE,PROMO,QUANTITE,CODE,IMAGE,DESCRIPTION,PRODUIT_DOU,IDCAT) VALUES (NULL,'$designation','$prixa','$prixv','$promo','$quantite','$code','$filename','$description',NOW(),'$cat')";


//$sql = "INSERT INTO produit VALUES (NULL,'$designation','$prix','$quantite','$code','$filename',NOW(),'$cat')";


//var_dump($sql);

if(mysqli_query($db, $sql)){
   $code =  "Records added successfully.";
} else{
   $code =  "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
 header("location:../index.php");
?>



