<?php 
include ("model.php");
class Abonne{
//attributs

public $nom_prenom;
private $date_inscription;
private $email;
private $photo;
//constructeur 
function __construct($nomprenom="",$date_inscription="",$email="",$photo=""){
$this->nom_prenom=$nomprenom;
$this->date_inscription=$date_inscription;
$this->email=$email;
$this->photo=$photo;
}

// ajouter un abonne 
function ajouter(){
    ajouter_abonnes($this->nom_prenom,$this->date_inscription,$this->email,$this->photo);

}



}




?>