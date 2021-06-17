<?php 
include "view/template/header.php";
?>

<div class="container row">
    <?php foreach($books as $book) : ?>
        <div class="col-4 text-center my-5">
            <ul class="list-group">
                <li class="list-group-item bg-secondary"><?php echo $book->getTitle()?></li>
                <li class="list-group-item "><?php echo $book->getAutor()?></li>
                <li class="list-group-item bg-secondary"><?php echo $book->getPublication()?></li>
                <li class="list-group-item"><?php echo $book->getCategory()?></li>
                <li class="list-group-item bg-secondary"><?php echo $book->getSummary()?></li>
                <li class="list-group-item"><?php echo $book->getDisponibility()?></li>
                <li class="list-group-item">
                <a class="btn btn-warning  px-5" href="book.php?id=<?php echo $book->getBookID();?>">Voir</a>
            </ul>
        </div>
    <?php endforeach;?>


</div>
<?php 
include "view/template/footer.php";
?>