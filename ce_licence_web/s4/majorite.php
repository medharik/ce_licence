<?php 
$age=$_POST['age'];
if($age>18){
    $message="tu es  majeur";
    
}else{
    $message="tu es mineur";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h6><?=$message?></h6>
</body>
</html>