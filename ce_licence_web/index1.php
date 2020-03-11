<?php 
$nom= "ACHRAF";
$age=3;
if($age > 18){
$m="Majeur ";
}else{
$m="Mineur";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon premier test</title>
</head>
<body>
<h2><?=random_int(1,9)?></h2>
<h2>Mon premier code en PHP dans le serveur web apache (ds laragon)</h2>
    <p>Bienvenue <?php echo $nom;?></p>
    <p>tu as <?php echo  $age ;?> ANS </p>
    <p>
    tu es <?php  echo $m;?>
    </p>
</body>
</html>