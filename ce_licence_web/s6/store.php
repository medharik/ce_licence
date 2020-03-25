<?php 
include("functions.php");
// extraire les data du form
$nom=$_POST['nom'];
$classe=$_POST['classe'];

// les ajouter dans la bd 
ajouter($nom,$classe);
// redirection vers la page index.php (liste des ressources )
header("location:index.php");
?>