<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

abstract class DataBase {

    const HOST = "localhost";
    const NAME = "bdd_bibli";
    const LOGIN = "root";
    const PASSWORD = "root";

    static public function getDB(){
        try{
            $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NAME, self::LOGIN, self::PASSWORD);
            return $db;
        }catch (Exception $e) {
            exit($e->getMessage());
        }
    }
}

