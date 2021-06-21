<?php
// Controleur qui gère l'affichage du détail d'un utilisateur

require "model/entity/user.php";
require "model/userManager.php";
require "model/dataBase.php";

$user = new userManager();

if(isset($_GET["id"])){
    $users = $user->getUserById($_GET["id"]);
}
else {
    $error="co morche po";
}


require "view/userView.php";