<?php 
include "template/header.php";

?>

<div class="container text-center">
    <h2>Ajouter un livre</h2>
    <form action="" method="POST">
        <input name ="title" class="form-control my-2" type="text" placeholder="Titre"> 
        <input name ="autor" class="form-control my-2" type="text" placeholder="Auteur">
        <input name ="publication" class="form-control my-2" type="text" placeholder="Date au format AAAA-MM-JJ">
        <input name ="category" class="form-control my-2" type="text" placeholder="Catégorie">
        <input name ="summary" class="form-control my-2" type="text" placeholder="Résumé">
        <input class="form-control btn btn-warning text-dark my-2" type="submit" value="Ajouter">    
    </form>
</div>




<?php
include "template/footer.php";

?>