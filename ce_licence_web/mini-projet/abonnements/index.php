<?php 
include('/ce_licence_web/mini-projet/config.php');

include(RACINE."model.php");
$notice="";
if(isset($_GET['nom_prenom']) && isset($_GET['date_de']) ){
    $abonnements=rechercher($_GET['nom_prenom'],$_GET['date_de'],$_GET['date_a']);
$notice ="Recherche de ".$_GET['nom_prenom'];
}else{
    $abonnements=all("abonnements");
    
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
Liste des abonnements :     </div>
<a href="create.php" class="btn btn-primary bnt-sm my-3 float-right">Nouveau</a>
<div class="row text-center">
<?php include_once("_search.php"); ?>

</div>
<table class="table table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>abonné</th>
            <th>photo</th>
            <th>Date de </th>
            <th>Date à </th>
            <th>Montant</th>
            <th>mode</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
<?php  foreach($abonnements as $a) {?>
        <tr>
            <td><?=$a['id']?></td>
            <td><?php 
            
            
          $id=  $a['abonne_id'];
          $abonne=find("abonnes",$id);
            echo $abonne['nom_prenom'];
            
            ?></td>
            <td>
        <img src="../<?=$abonne['photo']?>" alt="" width="100">
            </td>
            <td><?=date_fr($a['date_de']);?> </td>
            <td><?=date_fr($a['date_a'])?></td>
            <td><?=$a['montant']?></td>
            <td><?=$a['mode']?></td>
            <td>
            <a onclick="return confirm('Voulez vraiment supprimer cet element?')" href="../controller.php?t=abonnements&a=delete&id=<?=$a['id']?>" class="btn btn-sm btn-danger">Supprimer</a>
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