<?php 
include('/ce_licence_web/mini-projet/config.php');

include(RACINE."model.php");
if(isset($_GET['motcle']) && !empty($_GET['motcle'])){
$abonnes=rechercher_mot_cle($_GET['motcle']);
}else{

    $abonnes=all("abonnes");
}


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
    <div class="alert alert-warning text-center my-1">
    Operation effetuée avec succes 
    </div>
    <a href="create.php" class="btn btn-primary bnt-sm my-3 float-right">Nouveau</a>
<div class="row">
<div class="col-md-6 mx-auto  p-1">
<?php include_once("_search.php");?>
</div>
</div>
<table class="table table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>NOM & PRENOM</th>
            <th>PHOTO </th>
            <th>DATE INSCRIPTION</th>
            <th>EMAIL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
<?php  foreach($abonnes as $a) {?>
        <tr>
            <td><?=$a['id']?></td>
            <td><?=$a['nom_prenom']?></td>
            <td><img src="<?=RACINE?><?=$a['photo']?>" alt="" width="100" class="mg-thumbnail rounded"> </td>
            <td><?=date_fr($a['date_inscription'])?></td>
            <td><a href="mailto:<?=$a['email']?>">@ <?=$a['email']?></a></td>
            <td>
            <a onclick="return confirm('Voulez vraiment supprimer cet element?')" href="../controller.php?t=abonnes&a=delete&id=<?=$a['id']?>" class="btn btn-sm btn-danger">Supprimer</a>
            <a href="edit.php?id=<?=$a['id']?>" class="btn btn-sm btn-warning">Modifier</a>
            <a href="show.php?id=<?=$a['id']?>" class="btn btn-sm btn-info">Consulter</a>
            </td>
        </tr>
<?php } ?>

    </tbody>
</table>


    </div>



    <?php 
    
    include("../_js.php");
    ?>
</body>
</html>