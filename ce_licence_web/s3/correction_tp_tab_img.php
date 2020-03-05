<?php 
$p1=['libelle'=>'iso 1','prix'=>200,'qte'=>1,'img'=>'images/1.jpg'];
$p2=['libelle'=>'iso 2','prix'=>500,'qte'=>12,'img'=>'images/2.jpg'];
$p3=['libelle'=>'iso 3','prix'=>500,'qte'=>20,'img'=>'images/3.jpg'];
$produits=[$p1,$p2,$p3];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits </title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <h3 class="text-center text-warning">Liste des <?=count($produits)?> produits </h3>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite</th>
      <th scope="col">Images</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($produits as $c=>$p) {?>
 <?php 
 $classe="";
 $qt=$p['qte'];
 if($qt<10) {
$classe="bg-danger";
} else if($qt<15){
    $classe="bg-warning";  
 }
    
?>  
    <tr>
      <th scope="row"><?=$c+1?></th>
      <td><?= $p['libelle'] ?></td>
      <td><?= $p['prix'] ?></td>
      <td  class="<?=$classe?>"><?= $p['qte'] ?></td>
      <td><img src="<?= $p['img'] ?>" width="100"></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('.table').DataTable();
});
</script>
</body>
</html>