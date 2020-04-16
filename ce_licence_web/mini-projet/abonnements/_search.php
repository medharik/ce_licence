<form action="index.php"  method="get">
 <div class="form-group ">
 <label for="npm_prenom">
Abonné : 
 </label> <input type="search" name="nom_prenom" id="motcle" class="my-1" placeholder="nom , prénom,email,..." >
 
 <label for="date_de">
Date de  : 
 </label> <input type="date" name="date_de" id="date_de" class="my-1">
 
 
 <label for="date_a">
Date à : 
 </label> <input type="date" name="date_a" id="date_a" class="my-1">
 
 
 <button class="btn btn-sm btn-primary">Ok</button>
 
 </div>

 <div class="alert alert-success " style="clear:both">
<?=$notice?>
</div>
</form>