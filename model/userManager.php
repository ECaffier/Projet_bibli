<?php


class userManager {

  private PDO $_db;

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = $this->_db->prepare("SELECT * FROM user");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key=>$user){
      $result[$key] = new User($user);
    }
    return $result;

  }

  // Récupère un utilisateur par son id
  public function getUserById(int $userID) {
    $query = $this->_db->prepare("SELECT * FROM user WhERE userID=:userID");
    $query->execute([
      "userID" => $userID
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $result = new User($result);
    return $result;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }

  function __construct(){
    $this->_db = DataBase::getDB();
}

}
