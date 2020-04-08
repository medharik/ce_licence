<?php
include("functions.php");
session_start();
 $login=$_POST['login'];
 $passe=$_POST['passe'];
 checker($login,$passe);
 
 header("location:restreinte.php");


?>