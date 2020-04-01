<?php 
include("functions.php");
//?id=3
$x=$_GET['id'];


$etudiant=find($x);// <=> $id=$x

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
        <ul class="list-group">
            <li class="list-group-item active"><?=$etudiant['nom']?></li>
            <li class="list-group-item"><?=$etudiant['classe']?></li>
        </ul>
        
        <a href="#" onclick="history.go(-1)" class="btn btn-warning btn-sm my-2">Retour</a>
        </div>
    </div>
</div>
    
</body>
</html>