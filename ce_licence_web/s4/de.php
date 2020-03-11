
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passage de donnees </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<?php if(isset($_GET['c']) && $_GET['c']=='no') {?>
tous les champs sont requis

<?php } ?>

<div class="col-md-6 border mx-auto shadow mt-3">

<form action="a.php" method="post">

<div class="form-group">
<label for="prix">Prix </label><input type="text" class="form-control" name="prix" id="prix" >
</div>
<div class="form-group">
<label for="qte">Quantite : </label><input type="text" class="form-control" name="qte" id="qte" >
</div>
<button type="submit" class="btn btn-primary">Calculer</button>
</form>

<hr>


<table class="table border table-bordered">
    <tr><td></td>
        <td>GET</td>
        <td>POST</td>
        
    </tr>
    <tr>
    <td>Vitesse</td>
        <td>+</td>
        <td>-</td>
    </tr>
    <tr>
    <td>Securite</td>
    <td>_</td>
    <td>+</td>
    </tr>
    <tr>
    <td>Capacite</td>
    <td>-</td>
    <td>+</td>
    </tr>
</table>
</div>
</div>

</div>
    


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>