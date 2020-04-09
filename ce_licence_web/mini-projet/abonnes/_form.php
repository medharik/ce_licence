<?php 
include('../model.php');
$a="store";
$abonne=[];
if(isset($_GET['id']))
$id=$_GET['id'];
if(isset($id)){
$a="update";
$abonne=find("abonnes",$id);
}

?>
<form action="../controller.php?t=abonnes&a=<?=$a?>" method="post" enctype="multipart/form-data">
        <div class="form-group"><label for="nom_prenom">Nom & Prénom : </label>
        <?php if(isset($id)) {?>
     <input type="hidden" name="id" value="<?=$id?>">
        <?php } ?>
        <input type="text" class="form-control" id="nom_prenom" name="nom_prenom" value="<?=(isset($id))? $abonne['nom_prenom']:'' ?>">
        </div>
        <div class="form-group"><label for="date_inscription">Date d'inscription : </label>
        <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="<?=(isset($id))? $abonne['date_inscription']:'' ?>">
        </div>
        <div class="form-group"><label for="email">Email (*) : </label>
        <input type="email" class="form-control" id="email" name="email" required value="<?=(isset($id))? $abonne['email']:'' ?>">
        </div>
        <div class="form-group"><label for="photo">Photo: </label>
        <input type="file" class="form-control" id="photo" name="photo">
        <?php if(isset($id)) {?>
        <img src="../<?=$abonne['photo']?>" width="200">
        <?php } ?>
        </div>

        <button class="btn btn-primary ">Valider</button>
        </form>
        
      