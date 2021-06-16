<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/bookManager.php";
require "model/dataBase.php";
require "model/entity/book.php";
require "model/entity/user.php";

$book = new bookManager();

if(isset($_GET["id"])){
    $books = $book->getBook($_GET["id"]);

}
else {
    $error="ca marche pas";
}

if(!empty($_POST)){

    $bookEdit = new Book($_POST);

    $bookManager = new BookManager();

    $bookManager->updateBookStatus($bookEdit);


}


include "view/bookView.php";
