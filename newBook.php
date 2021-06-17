<?php 

require "model/bookManager.php";
require "model/dataBase.php";
require "model/entity/book.php";


if(!empty($_POST)){
    $book = new Book($_POST);

    $bookManager = new BookManager();

    $bookManager->addBook($book);
}

require "view/newBookView.php";

?>
