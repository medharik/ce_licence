<?php 
//recuperer les infos : prix, qte
//variables implicites ou superglobales

if(!isset($_POST['prix'])){
header("location:de.php?c=no");
exit();
}
$prix=$_POST['prix'];
$qt=$_POST['qte'];
$ttc=$prix*$qt;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> Le ttc est : <?=$ttc?></h4>
</body>
</html>