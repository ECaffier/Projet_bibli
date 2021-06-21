<?php 
include "view/template/header.php";
$bookDisponibility = $books->getDisponibility();
?>

<?php if(isset($books)) : ?>

<div class="container row text-center">
    <aside class=col-6>
        <h2>Détails du livre : </h2>
        <ul>
            <li class="list-group-item "><?php echo $books->getTitle();?></li>
            <li class="list-group-item "><?php echo $books->getAutor();?></li>
            <li class="list-group-item "><?php echo $books->getPublication();?></li>
            <li class="list-group-item "><?php echo $books->getCategory();?></li>
            <li class="list-group-item "><?php echo $books->getSummary();?></li>
            <?php if ($bookDisponibility === "disponible") : ?>
            <li class="list-group-item bg-success"><?php echo $books->getDisponibility();?></li>
            <?php else : ?>
                <li class="list-group-item bg-danger"><?php echo $books->getDisponibility();?></li>
            <?php endif ?>
        </ul>
        <a class="btn btn-warning px-5" href="index.php">Retour à l'accueil</a>
        <?php if ($bookDisponibility === "disponible") : ?>
            <a class="btn btn-danger text-white  px-5" href="deleteBook.php?id=<?php echo $books->getBookID()?>">Supprimer le livre</a>
        <?php endif?>
    </aside>
    <?php 
    


    if ($bookDisponibility === "indisponible") : ?>
        <aside class="col-6">
        <h2>Le livre a été emprunté par : </h2>
        <ul>
            <li class="list-group-item ">Identité : </br> <?php echo $users->getLastname() . " " . $users->getFirstname()?></li>
            <li class="list-group-item ">Email : </br> <?php echo $users->getEmail()?></li>
            <li class="list-group-item ">Numéro de carte de membre : </br> <?php echo $users->getCard_number()?></li>       
        </ul>
    </aside>
    <div class="my-5">
            <h2>Rendre un livre</h2>
            <form action="" method="POST">
                <input type="hidden" name="disponibility" id="disponibility" value="disponible">
                <input type="hidden" name="userID", id="userID" value="1" class="form-control my-2">
                <input class="form-control btn btn-warning my-2" type="submit" value="Rendre le livre">  
            </form>
        </div>
    <?php 
    else :
    ?>
        <h2 class="col-6">Le livre est disponible.</h2>  
        <div class="my-5">
            <h2>Emprunter ce livre</h2>
            <form action="" method="POST">
                <input type="hidden" name="disponibility" id="disponibility" value="indisponible">
                <input type="text" name="userID", id="userID" placeholder="ID de l'utilisateur" class="form-control my-2">
                <input class="form-control btn btn-warning my-2" type="submit" value="Emprunter le livre">  
            </form>
        </div>
    <?php 
    endif ?>
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


