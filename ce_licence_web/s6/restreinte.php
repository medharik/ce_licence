<?php 
session_start();
include("functions.php");
if(isset($_SESSION['login']) && isset($_SESSION['passe'])){
checker($_SESSION['login'],$_SESSION['passe']);

}else{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Bienvenue : <?=$_SESSION['pseudo']?></h4>
    <a href="deconnecter.php">Deconnexion</a>   
</body>
</html>