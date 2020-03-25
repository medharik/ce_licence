<?php 
// afficher la liste des ressources 
include ("functions.php");
$etudiants = all();
//  var_dump($etudiants);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <div class="alert alert-info text-center">
    Liste des étudiants 
    </div>

   <div class="container">
   <table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Classe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

<?php foreach($etudiants as $e) { ?>

        <tr>
            <td><?=$e['id']?></td>
            <td><?=$e['nom']?></td>
            <td><?=$e['classe']?></td>
            <td></td>
        </tr>
<?php } ?>

    </tbody>
    
    </table>
   </div>
</body>
</html>