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
    <title>Edition de la  ressource</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 shadow mx-auto my-3 p-3">
        <h3 class="text-center text-primary">Edition </h3>
        
        <form action="update.php" method="post">
<input type="hidden" name="id" value="<?=$etudiant['id']?>">

        <div class="form-group">
                <label for="nom">Nom </label>
            <input type="text" class="form-control" name="nom" id="nom" value="<?=$etudiant['nom']?>">
        </div>
        <div class="form-group">
                <label for="classe">Classe :  </label>
            <input type="text" class="form-control" name="classe" id="classe" value="<?=$etudiant['classe']?>">
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Modifier </button>
        
        
        </form>
        
        </div>
    </div>
</div>


</body>
</html>