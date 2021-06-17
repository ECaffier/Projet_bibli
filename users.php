<?php
// Controleur qui gère l'affichage de tous les utilisateurs
require "model/dataBase.php";
require "model/userManager.php";
require "model/entity/user.php";

$userManager = new userManager;

$users = $userManager->getUsers();

require "view/usersView.php";