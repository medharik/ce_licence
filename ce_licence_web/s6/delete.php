<?php 
include("functions.php");
$id=$_GET['id'];
supprimer($id);
header("location:index.php?op=del");

?>