<?php 
if(isset($_GET['motcle']) && !empty($_GET['motcle'])){
setcookie('motcle',$_GET['motcle'],time()+60);

}

?>
<form action="index.php" >
 <div class="form-group">
 <label for="motcle">
 Mot clé :  
 
 </label> <input  value="<?php if(isset($_COOKIE['motcle'])) echo $_COOKIE['motcle']?>"   type="search" name="motcle" id="motcle" class="my-1" placeholder="nom , prénom,email,..." style="width:50%">
 <button class="btn btn-sm btn-primary">Ok</button>
 
 </div>

</form>