<?php 
// afficher la liste des ressources 
include ("functions.php");
$etudiants = all();
//  var_dump($etudiants);
$message="";
$classe="d-none";
if(isset($_GET['op']) && $_GET['op']=='del'){
    $message="Suppression effectuee avec succes";
$classe="d-block";
}
if(isset($_GET['op']) && $_GET['op']=='upd'){
    $message="Modification est  effectuee avec succes";
$classe="d-block";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://scdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="alert alert-info text-center">
    Liste des étudiants 
    </div>
<div class="alert alert-danger text-center <?=$classe?>">

<?=$message?>

</div>
   <div class="container">
<a href="create.php" class="btn btn-primary  float-right" >Nouveau</a>
   <table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <td>Photo</td>
            <th>Nom</th>
            <th>Classe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

<?php foreach($etudiants as $e) { ?>

        <tr>
            <td><?=$e['id']?></td>
            <td><img src="<?=$e['chemin']?>" class="img-thumbnail" width="150"></td>
            <td><?=$e['nom']?></td>
            <td><?=$e['classe']?></td>
            <td>
            <a  onclick="return confirm('Voulez vous vraiment supprimer cet etudiant?')" class="btn  btn-danger  btn-sm"
             href="delete.php?id=<?=$e['id']?>">Supprimer</a>
            <a class="btn  btn-warning  btn-sm" href="edit.php?id=<?=$e['id']?>">Modifier</a>
            <a class="btn  btn-info  btn-sm" href="show.php?id=<?=$e['id']?>">Consulter</a>
            </td>
        </tr>
<?php } ?>

    </tbody>
    
    </table>
   </div>


   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script>
   $(document).ready( function () {
    $('.table').DataTable();
} );
   
   </script>
</body>
</html>