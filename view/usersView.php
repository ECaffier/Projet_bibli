<?php 
include "view/template/header.php";
?>

<div class="container row">
    <?php foreach($users as $user) : ?>
        <div class="col-4 text-center my-5">
            <ul class="list-group">
                <li class="list-group-item bg-secondary">Nom : <?php echo $user->getFirstname() . " " . $user->getLastname() ?></li>
                <li class="list-group-item">Date de naissance : <?php echo $user->getBirthdate()?></li>
                <li class="list-group-item bg-secondary">Email : <?php echo $user->getEmail()?></li>
                <li class="list-group-item">Numéro de carte : <?php echo $user->getCard_number()?></li>
                <li class="list-group-item">ID : <?php echo $user->getUserID()?></li>
                <a class="btn btn-warning  px-5" href="user.php?id=<?php echo $user->getUserId();?>">Voir</a>
            </ul>
        </div>
    <?php endforeach;?>


</div>
<?php 
include "view/template/footer.php";
?>
