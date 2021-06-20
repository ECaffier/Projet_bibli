<?php

class bookManager {

  private PDO $_db;

  // Récupère tous les livres
  public function getBooks() {
    $query = $this->_db->prepare("SELECT * FROM book");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    foreach ($result as $key =>$book) {
      $result[$key] = new Book($book);
    }
    return $result;
  }

  // Récupère un livre
  public function getBook(int $bookID) {
    $query = $this->_db->prepare("SELECT * FROM book WHERE bookID=:bookID");
    $query->execute([
      "bookID" => $bookID
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $result = new Book($result);
    return $result;
    

  }

  // Ajoute un nouveau livre
  public function addBook(Book $newBook) {
    $query = $this->_db->prepare("INSERT INTO book(title, autor, publication, category, summary, disponibility) VALUES( :title, :autor, :publication, :category, :summary, 'disponible' )");
    $result = $query->execute([
      "title" => $newBook->getTitle(),
      "autor" => $newBook->getAutor(),
      "publication" => $newBook->getPublication(),
      "category" => $newBook->getCategory(),
      "summary" => $newBook->getSummary()
    ]);

    return $result;

  }
  public function deleteBook(int $bookID){
    $query = $this->_db->prepare("DELETE FROM book WHERE bookID=:bookID");
    $result = $query->execute([
      "bookID" => $bookID
    ]);
    return $result;
  }


  // Met à jour le statut d'un livre emprunté
  // public function updateBookStatus() {
  //   $query = $this->_db->prepare("UPDATE book SET disponibility = indisponible")
  //   $result = $query->execute();
  //   return $result;
  // }

  public function updateBookStatus($disponibility, $bookID) {
    $query = $this->_db->prepare("UPDATE book SET disponibility = :disponibility WHERE bookID= :bookID" );
    $result = $query->execute([
      "disponibility"=>$disponibility->getDisponibility(),
      "bookID" =>$bookID

    ]);
    return $result;
  }


  // public function updateIndisponible(Book $newBook) {
  //   $query = $this->_db->prepare("UPDATE book SET disponibility = :disponibility, userID = :userID");
  //   $result = $query->execute([
  //     "disponibility"=>$bookID,
  //     "userID"=>$userID

  //   ]);
  //   return $result;
  // }

  // public function updateDisponible() {
  //   $query = $this->_db->prepare("UPDATE book SET disponibility = 'disponible'")
  //   $result = $query->execute();
  //   return $result;
  // }

  function __construct(){
    $this->_db = DataBase::getDB();
}

}
