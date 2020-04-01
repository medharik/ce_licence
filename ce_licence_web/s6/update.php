<?php 
include("functions.php");
// $nom=$_POST['nom'];
// $classe=$_POST['classe'];
// $id=$_POST['id'];
extract($_POST);// extraire les data dans des variables  qui portent le meme nom 
modifier($nom,$classe,$id);
header("location:index.php?op=upd");
?>