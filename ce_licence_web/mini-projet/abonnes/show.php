<?php 
include("../model.php");
$id=$_GET['id'];
$abonne=find("abonnes",$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../_css.php");?>
</head>
<body>
<?php include_once("../_menu.php");?>
    <div class="container">
    <div class="card mx-auto text-center" style="width: 18rem;">
  <img src="../<?=$abonne['photo']?>" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><?=$abonne['nom_prenom']?></p>
    <p class="card-text"><?=$abonne['email']?></p>
    <p class="card-text"><?=$abonne['date_inscription']?></p>
   <a onclick="history.go(-1)" href="#" class="btn btn-primary btn-sm">Retour</a>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="../<?=$abonne['photo']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$abonne['nom_prenom']?></h5>
        <p class="card-text"><a href="mailto:<?=$abonne['email']?>"><?=$abonne['email']?></a></p>
        <p class="card-text"><small class="text-muted">Inscrit le : <?=$abonne['date_inscription']?></small></p>
        <a onclick="history.go(-1)" href="#" class="btn btn-primary btn-sm">Retour</a>

      </div>
    </div>
  </div>
</div>
    </div>



    <?php 
    
    include("../_js.php");
    ?>
</body>
</html>