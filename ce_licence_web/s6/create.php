<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle ressource</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 shadow mx-auto my-3 p-3">
        <h3 class="text-center text-primary">Nouveau</h3>
        
        <form action="store.php" method="post">
        <div class="form-group">
                <label for="nom">Nom </label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="form-group">
                <label for="classe">Classe :  </label>
            <input type="text" class="form-control" name="classe" id="classe">
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        
        
        </form>
        
        </div>
    </div>
</div>


</body>
</html>