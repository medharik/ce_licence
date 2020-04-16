<?php 
include("config.php");
include("model.php");
extract($_POST);//$nom=$_POST['nom'], ...// dans les forms 
extract($_GET);//$t, $a , $id  (dans les liens )

if($t=="abonnes"){
if($a=="store"){
    $chemin=uploader($_FILES['photo']);
    ajouter_abonnes($nom_prenom,$date_inscription,$email,$chemin);
}
if($a=="delete"){
    $abonne=find($t,$id);
    unlink($abonne['photo']);
    supprimer($t,$id);
}
if($a=="update"){
    $chemin="";
  
    if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])){
        $abonne=find($t,$id);
        unlink($abonne['photo']);
        $chemin=uploader($_FILES['photo']);

     }
    modifier_abonnes($nom_prenom,$date_inscription,$email,$chemin,$id);
}





header("location:abonnes/index.php");
}
if($t=="abonnements"){
if($a=="store"){
  
    ajouter_abonnement($date_de,$date_a,$montant,$mode,$abonne_id);
}
if($a=="delete"){
    $abonne=find($t,$id);
  
    supprimer($t,$id);
}
if($a=="update"){
  
    modifier_abonnement($date_de,$date_a,$montant,$mode,$abonne_id,$id);

}





header("location:abonnements/index.php");
}




?>