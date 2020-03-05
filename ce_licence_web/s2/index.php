<?php 
$prenom ='Doe ';
$age =20;
$nom ="John";

// if($age<18){
//     $color="pink";
// }else{
    
//     $color="blue";
// }
$color=($age<18)? "pink":"#CCC";
//tableau : ensemble de donnees 
// tableau indexe (numerote a partir de 0)
$ti=["hp","dell",'sony'];
$ti[3]="acer";//
$ti[]="SONY";// push, indice = 4
$ti[]="MAC";// push, indice = 4
// tableau associatif (hash) (on associe a chaque valeur une cle)
$ta=array('libelle'=>'hp dv 7','prix'=>9000,'qtestock'=>10,100,"test test");
var_dump($ta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="<?php echo 'background:'.$color?>">

<?php 
echo "<h3 style='color:red'>1-Bienvenue $nom $prenom</h3>";//B john doe
echo '<h3>2-Bienvenue $nom $prenom</h3>';//h3 B $nom $prenom
echo '<h3>3-Bienvenue '.$nom.' '.$prenom.'</h3>';//idem 1
?>
<h3 style="color:<?=$col2?>">Bienvenue <?= $nom ?> <?=$prenom?></h3>
<h2>Les tableaux en PHP</h2>
<h4>Liste des <?=count($ti)?> PC<?=count($ti)<=1 ? "":"S"?></h4>
<?php for($i=0;$i<count($ti);$i++) { ?>
<p>Element <?=$i?> est <?=$ti[$i]?><p>
<?php } ?>
<hr>
<?php foreach($ti  as $x=>$y) { ?>
<p>Element <?=$x?> est <?=$y?><p>
<?php } ?>
<hr>

<?php foreach($ta as $c=>$v){?>

<p> <?=$c?> est <?=$v?><p>
<?php } ?>

</body>
</html>