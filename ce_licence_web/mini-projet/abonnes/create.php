<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../_css.php");?>
</head>
<body>
<?php include_once("../_menu.php");?>
    <div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-3 my-3">
        <div class="alert alert-info">Inscription:</div>
        <form action="../controller.php?t=abonnes&a=store" method="post" enctype="multipart/form-data">
        <div class="form-group"><label for="nom_prenom">Nom & Prénom : </label>
        <input type="text" class="form-control" id="nom_prenom" name="nom_prenom">
        </div>
        <div class="form-group"><label for="date_inscription">Date d'inscription : </label>
        <input type="text" class="form-control" id="date_inscription" name="date_inscription">
        </div>
        <div class="form-group"><label for="email">Email (*) : </label>
        <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group"><label for="photo">Photo: </label>
        <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <button class="btn btn-primary ">Valider</button>
        </form>
        
        </div>
    
    </div>
    
    </div>



    <?php 
    
    include("../_js.php");
    ?>
</body>
</html>