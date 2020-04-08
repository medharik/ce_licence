<?php 
include("model.php");

extract($_POST);//$nom=$_POST['nom'], ...// dans les forms 
extract($_GET);//$t, $a , $id  (dans les liens )

if($t=="abonnes"){
if($a=="store"){
    $chemin=uploader($_FILES['photo']);
    ajouter_abonnes($nom_prenom,$date_inscription,$email,$chemin);
}




header("location:abonnes/index.php");
}




?>