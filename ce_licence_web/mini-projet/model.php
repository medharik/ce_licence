<?php 

function connecter_db(){
    try{
            $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $link=  new PDO ("mysql:host=localhost;dbname=db_salle_sport","root","",$options);
            return $link;
    }catch(PDOException $e ){
die ("erreur de connexion a la base de donnees ".$e->getMessage());
    }
 
}

//abonnes
function ajouter_abonnes($nomprenom,$date_inscription,$email,$photo){
 try{
           
           $link= connecter_db();
            $rp=$link->prepare("insert into abonnes(nom_prenom,date_inscription,email,photo) values(?,?,?,?)");
            $rp->execute([$nomprenom,$date_inscription,$email,$photo]);
}catch(PDOException $e ){
    die ("erreur d'ajout de l'abonnes  dans  la base de donnees ".$e->getMessage());
}
}
//
//modifier  une ressource (par id)
function modifier_abonnes($nomprenom,$date_inscription,$email,$photo,$id){
    try{
       $link= connecter_db();
     if(!empty($photo)){
        $rp=$link->prepare("update abonnes set nom_prenom=? , date_inscription=? , email=? , photo=?  where id=?");
        $rp->execute([$nomprenom,$date_inscription,$email,$photo,$id]);
     }else{
        $rp=$link->prepare("update abonnes set nom_prenom=? , date_inscription=? , email=?  where id=?");
        $rp->execute([$nomprenom,$date_inscription,$email,$id]);
     }
}catch(PDOException $e ){
die ("erreur de modification   de l'abonne dans  la base de donnees ".$e->getMessage());
}
}
// fin abonne

//abonnement
function ajouter_abonnement($date_de,$date_a,$montant,$mode,$abonne_id){
 try{
           
           $link= connecter_db();
            $rp=$link->prepare("insert into abonnements(date_de,date_a,montant,mode,abonne_id) values(?,?,?,?,?)");
            $rp->execute([$date_de,$date_a,$montant,$mode,$abonne_id]);
}catch(PDOException $e ){
    die ("erreur d'ajout de l'abonnement  dans  la base de donnees ".$e->getMessage());
}
}
//
//modifier  une ressource (par id)
function modifier_abonnement($date_de,$date_a,$montant,$mode,$abonne_id,$id){
    try{
       $link= connecter_db();
        $rp=$link->prepare("update abonnements  set date_de=? , date_a=? , montant=? , mode=? , abonne_id=? where id=?");
        $rp->execute([$date_de,$date_a,$montant,$mode,$abonne_id,$id]);
}catch(PDOException $e ){
die ("erreur de modification   de l'abonnement dans  la base de donnees ".$e->getMessage());
}
}
// fin abonnement




//supprimer une ressource (par id)
// supprimer("abonnes",1)
function supprimer($table,$id){
    try{
       $link= connecter_db();
        $rp=$link->prepare("delete from  $table  where id=?");
        $rp->execute([$id]);
}catch(PDOException $e ){
die ("erreur de suppression  de l'etudiant dans  la base de donnees ".$e->getMessage());
}
}


// recuperer des ressources depuis la bd
function all($table ){
    try{
        $link= connecter_db();
         $rp=$link->prepare("select * from $table order by id  desc");
         $rp->execute();
     $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation dans  $table dans  la base de donnees ".$e->getMessage());
 }

}
// recuperer une  ressource par son id depuis la bd
function find($table,$id){
    try{
        $link= connecter_db();
         $rp=$link->prepare("select * from $table  where id=? ");
         $rp->execute([$id]);
     $resultat=  $rp->fetch();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation de l'etudiant d'id = $id dans  la base de donnees ".$e->getMessage());
 }

}
// upload = televersement de fichier 
//$infos=$_FILES['chemin']
function uploader($infos){
$tmp=$infos['tmp_name'];
$nom=$infos['name'];
$path_parts = pathinfo($nom);
//var_dump($path_parts);
$ext=strtolower($path_parts ["extension"]);
$new_name=md5(date('YmdHis').'_'.rand(0,9999)).'.'.$ext;
$autorise=['jpg','png','jpeg','gif','mp4'];
$chemin="images/$new_name";
if(!in_array($ext,$autorise)){
die("Ce n'est pas une image");
}
$taille=filesize($tmp);// retourne la taille du fichier en octect
if($taille > MAX_UPLOAD_SIZE){
die("Veulliez choisir un fichier de taille < 8Mo");
}
if(!move_uploaded_file($tmp,$chemin)){
die("Probleme d'upload de l'image");
};

return $chemin;

}


//check login

function checker($login,$passe){
    try{
        $link= connecter_db();
         $rp=$link->prepare("select * from user  where login=? and passe=? ");
         $rp->execute([$login,$passe]);
     $resultat=  $rp->fetch();  
if(empty($resultat)){
header("location:login.php?cn=no");
die();
}else{

$_SESSION['login']=$login;
$_SESSION['passe']=$passe;
$_SESSION['pseudo']=$resultat['pseudo'];


}


     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation de l'etudiant d'id = $id dans  la base de donnees ".$e->getMessage());
 }

}

function date_fr($date){

    $date=new DateTime($date);
return     $date->format('d/m/Y');

}

function d_mois($date_de,$date_a){
$dt1=new DateTime($date_de);
$dt2=new DateTime($date_a);
$i=$dt1->diff($dt2);
return $i->format('%r%m');
}

//recherche 
function rechercher_mot_cle($motcle){

    try{
        $link= connecter_db();

         $rp=$link->prepare("select * from abonnes where nom_prenom like ? or date_inscription  like ? or email like ?  order by id  desc");
         $rp->execute(["%$motcle%","%$motcle%","%$motcle%"]);
     $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation dans  $table dans  la base de donnees ".$e->getMessage());
 }

}
function rechercher($nomprenom,$date_de,$date_a){

    try{
        $link= connecter_db();

        if(!empty($nomprenom) && !empty($date_de) && !empty($date_a)){

            $rp=$link->prepare("select * from abonnements am join abonnes ab on am.abonne_id = ab.id
            
            where ab.nom_prenom like ? and date_de  >= ? and date_a <= ?  order by am.id  desc");
            $rp->execute(["%$nomprenom%","$date_de","$date_a"]);
            
        }else if(!empty($nomprenom) ){
            $rp=$link->prepare("select * from abonnements am join abonnes ab on am.abonne_id = ab.id
            
            where ab.nom_prenom like ?  order by am.id  desc");
            $rp->execute(["%$nomprenom%"]);

        }else{
            $rp=$link->prepare("select * from abonnements order by id  desc");
            $rp->execute();
        }
     $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recherche  ".$e->getMessage());
 }

}


// fin recherche 


   