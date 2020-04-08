<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if(isset($_GET['cn']) && $_GET['cn']=='no'){
?>
Login / mot de passe incorrectes

<?php  }  ?>
<form action="check.php" method="post">
Login : <input type="text" name="login" id="">
Mot de passe : <input type="text" name="passe" id="">
<button>Se connecter</button>
</form>
    
</body>
</html>