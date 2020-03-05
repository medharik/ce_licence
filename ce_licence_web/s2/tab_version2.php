<?php 
$hp=[
        'libelle'=>'hp dv 7',
        'prix'=>9000,
        'qte'=>10,

];
$sony=[
        'libelle'=>'sony vaio',
        'prix'=>10000,
        'qte'=>0,

];
$mac=[
        'libelle'=>'mac pro',
        'prix'=>19000,
        'qte'=>100,

];


$stock=[$hp,$sony,$mac];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h3 class="text-center text-primary">Liste des produits </h3>
<table class="table table-striped table-dark" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Qte stock</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($stock as $c=>$p) {?>
    <tr >
      <th scope="row"><?=$c?></th>
  <?php foreach($p as $cc=>$ce){?>
      <td class='<?=($cc=='qte' && $ce==0 )? "text-danger":"" ?>'>
      <?=$ce?>
      </td>
  
  <?php }} ?>
  </tbody>
</table>  
</body>
</html>