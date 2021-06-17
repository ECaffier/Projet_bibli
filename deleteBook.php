<?php 

require "model/dataBase.php";
require "model/bookManager.php";


$delete = new bookManager();
$delete -> deleteBook($_GET["id"]);

header("location:index.php");

exit

?>