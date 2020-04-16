<?php 
include('../model.php');
$a="store";
$abonnement=[];
if(isset($_GET['id']))
$id=$_GET['id'];
if(isset($id)){
$a="update";
$abonnement=find("abonnements",$id);
}
$abonnes=all("abonnes");

$modes=['cb','cheque','espece'];
?>
<form action="../controller.php?t=abonnements&a=<?=$a?>" method="post" enctype="multipart/form-data">
<div class="form-group">
        <label for="abonne_id">Abonné : </label>
      
      <select name="abonne_id" class="form-control" id="abonne_id">
      <option value="">...</option>
<?php foreach($abonnes as $a) { ?>
      <option  <?=($a['id']==$abonnement['abonne_id'])?  'selected':'' ?>  value="<?=$a['id']?>"><?=$a['nom_prenom']?></option>
<?php } ?>
      
      </select>
      
        </div>
       
        <div class="form-group"><label for="date_de">Date de : </label>
        <?php if(isset($id)) {?>
     <input type="hidden" name="id" value="<?=$id?>">
        <?php } ?>
       

        <input type="date" class="form-control" id="date_de" name="date_de" value="<?=(isset($id))? $abonnement['date_de']:'' ?>">
        </div>
        <div class="form-group"><label for="date_a">Date à : </label>
        <input type="date" class="form-control" id="date_a" name="date_a" value="<?=(isset($id))? $abonnement['date_a']:'' ?>">
        </div>
        <div class="form-group"><label for="montant">montant (*) : </label>
        <input type="number" class="form-control" id="montant" name="montant" required value="<?=(isset($id))? $abonnement['montant']:'' ?>">
        </div>
        <div class="form-group"><label for="mode">Mode de paiement: </label>
       <select name="mode" id="mode" class="form-control"> 
     <?php foreach($modes as $m) {?>
       <option value="espece" <?=($abonnement['mode']==$m)? 'selected':'';?> ><?=strtoupper($m)?></option>
             <?php } ?>
            </select>
       
        </div>

        <button class="btn btn-primary ">Valider</button>
        </form>
        
      