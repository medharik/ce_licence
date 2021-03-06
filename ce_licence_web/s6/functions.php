<?php 
include("config.php");
// les 3 extensions php / SGBD :
// mysql_ : 
// mysqli_ : facile / mono SGBD
// PDO : PHP DATA OBJECT : multi-sgbd
// fonction pour se connecter a une base de donnees 
// host : localhost, dbname=db1 , login (root) / mot de passe ()
function connecter_db(){
    //3 modes d'exception PDO 
    //silent_mode => production 
    // warning_mode => test 
    //EXECPTION_MODE
    try{
            $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $link=  new PDO ("mysql:host=localhost;dbname=db1","root","",$options);
            return $link;
    }catch(PDOException $e ){
die ("erreur de connexion a la base de donnees ".$e->getMessage());
    }
 
}

function ajouter($nom,$classe,$chemin){
 try{
            //connexion avec la base 
           $link= connecter_db();
            // preparer une requete bd  dans cette connexion: SQL
            $rp=$link->prepare("insert into etudiant(nom,classe,chemin) values(?,?,?)");
            // executer la requete  preparee
            $rp->execute([$nom,$classe,$chemin]);
}catch(PDOException $e ){
    die ("erreur d'ajout de l'etudiant dans  la base de donnees ".$e->getMessage());
}
}


//supprimer une ressource (par id)
function supprimer($id){
    try{
       $link= connecter_db();
        $rp=$link->prepare("delete from etudiant where id=?");
        $rp->execute([$id]);
}catch(PDOException $e ){
die ("erreur de suppression  de l'etudiant dans  la base de donnees ".$e->getMessage());
}
}

//modifier  une ressource (par id)
function modifier($nom,$classe,$id){
    try{
       $link= connecter_db();
        $rp=$link->prepare("update etudiant set nom=? , classe=?  where id=?");
        $rp->execute([$nom,$classe,$id]);
}catch(PDOException $e ){
die ("erreur de modification   de l'etudiant dans  la base de donnees ".$e->getMessage());
}
}

// recuperer des ressources depuis la bd
function all(){
    try{
        $link= connecter_db();
         $rp=$link->prepare("select * from etudiant order by id  desc");
         $rp->execute();
     $resultat=  $rp->fetchAll();  

     return $resultat;
 }catch(PDOException $e ){
 die ("erreur de  recuperation des etudiants dans  la base de donnees ".$e->getMessage());
 }

}
// recuperer une  ressource par son id depuis la bd
function find($id){
    try{
        $link= connecter_db();
         $rp=$link->prepare("select * from etudiant  where id=? ");
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


// fin check login



?>