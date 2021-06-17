<?php 
include "view/template/header.php";
?>

<?php if(isset($books)) : ?>
<div class="container">
    <aside>
        <ul>
            <li class="list-group-item "><?php echo $books->getTitle();?></li>
            <li class="list-group-item "><?php echo $books->getAutor();?></li>
            <li class="list-group-item "><?php echo $books->getPublication();?></li>
            <li class="list-group-item "><?php echo $books->getCategory();?></li>
            <li class="list-group-item "><?php echo $books->getSummary();?></li>
            <li class="list-group-item "><?php echo $books->getDisponibility();?></li>
        </ul>
        <a class="btn btn-warning  px-5" href="index.php">Retour à l'accueil</a>
        <a class="btn btn-danger text-white  px-5" href="deleteBook.php?id=<?php echo $books->getBookID()?>">Supprimer le livre</a>
    </aside>
    <aside>
        <h2>Rendre un livre</h2>
        <form action="" method="POST">
            <!-- <input name ="userID" class="form-control my-2" type="text" placeholder="ID du user"> -->
            <select name="disponibility" id="disponibility" class="form-control my-2" type="text">
                <option value="disponible">Disponible</option>
                <option value="indisponible">Indisponible</option>
            </select>
            <input class="form-control btn btn-warning my-2" type="submit" value="Envoyer">  
        </form>
    </aside>


<?php
    else :
        echo $error
?> 
<p> Impossible de charger le livre.</p>
<?php endif?>

<?php 

include "template/footer.php";

?>

</div>


