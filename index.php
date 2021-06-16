<?php
// Controlleur qui gérer l'affichage de tous les livres
require "model/dataBase.php";
require "model/bookManager.php";
require "model/entity/book.php";

$bookManager = new bookManager();

$books = $bookManager->getBooks();


require "view/indexView.php";