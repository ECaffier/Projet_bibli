<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/bookManager.php";
require "model/userManager.php";
require "model/dataBase.php";
require "model/entity/book.php";
require "model/entity/user.php";


$bookManager = new bookManager();

if(isset($_GET["id"])){
    $books = $bookManager->getBook($_GET["id"]);

    $user = new USER();

    $userManager = new userManager();

    $userID = $books->getUserID();

    if ($userID != null){
        $users = $userManager->getUserById($userID);
    }

}
else {
    $error="ca marche pas";
}

if(!empty($_POST)){

    $book = new Book($_POST);
  
    $bookID = $_GET["id"];

    $bookManager->updateBookStatus($book, $bookID);

    header('Location: index.php');
    exit;
}



include "view/bookView.php";
