<?php 
include "view/template/header.php";


if(isset($users)) :?>

<div class="container">
    <ul>
        <li class="list-group-item bg-secondary">Nom :  </br> <?php echo $users->getFirstname() . " " . $users->getLastname() ?></li>
        <li class="list-group-item">Date de naissance :  </br> <?php echo $users->getBirthdate()?></li>
        <li class="list-group-item bg-secondary"> Email :  </br> <?php echo $users->getEmail()?></li>
        <li class="list-group-item">Numéro de carte : </br> <?php echo $users->getCard_number()?></li>
        <li class="list-group-item">Id de l'utilisateur : </br> <?php echo $users->getUserID()?></li>
        <a class="btn btn-warning  px-5" href="index.php">Retour à l'accueil</a>
    </ul>
</div>



<?php
else :
echo  $error ?>

<?php endif?>

<?php
include "view/template/footer.php";
?>