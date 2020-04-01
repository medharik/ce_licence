<?php 
include("functions.php");

// extraire les data du form
// var_dump($_FILES['chemin']);
$chemin =uploader($_FILES['chemin']);//$infos=$_FILES['chemin']

$nom=$_POST['nom'];
$classe=$_POST['classe'];

// les ajouter dans la bd 
ajouter($nom,$classe,$chemin);
// redirection vers la page index.php (liste des ressources )
header("location:index.php");
?>