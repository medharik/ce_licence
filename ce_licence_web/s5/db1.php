<?php 
$cnx=new PDO("mysql:host=localhost;dbname=ce_licence_2020", "root", "");
$rp=$cnx->prepare("insert into produit(libelle,prix) values (?,?)");
$rp->execute(['dell 23',10000]);

/*
-- CREATE DATABASE ce_licence_2020
-- USE ce_licence_2020
-- DESCRIBE produit
CREATE TABLE produit (

id INT PRIMARY KEY AUTO_INCREMENT,
libelle VARCHAR(100),
prix float

)*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP / BD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<h4>Les 3 extensions du php pour gerer les  BD :</h4>
<div class="container">

<table class="table table-dark table-bordered">
<tr>
    <th></th>
    <th>INCOVENIENT</th>
    <th>AVANTAGE</th>
</tr>
    <tr>
        <td>MYSQL_</td>
        <td>OBSOLETE </td>
        <td>FACILE</td>
    </tr>
    <tr>
        <td>MYSQLI_</td>
        <td>mono SGBD : mysql/ moins securise</td>
        <td>FACILE</td>
    </tr>
    <tr>
        <td>PDO : PHP DATA OBJECT</td>
        <td>PLUS DIFFICILE</td>
        <td>multi SGBD  , PLUS SECURISE</td>
    </tr>
</table>
</div>
    
</body>
</html>