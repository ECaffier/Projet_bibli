<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $bookID;
    protected string $title;
    protected string $autor;
    protected string $publication ;
    protected string $category;
    protected string $summary;
    protected string $disponibility;
    protected ?int $userID;

    public function setBookID(int $bookID){
        $this->bookID = $bookID;
    }
    public function getBookID():int{
        return $this->bookID;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function getTitle():string{
        return $this->title;
    }
    public function setAutor(string $autor){
        $this->autor = $autor;
    }
    public function getAutor():string{
        return $this->autor;
    }
    public function setPublication(string $publication){
        $this->publication = $publication;
    }
    public function getPublication():string{
        return $this->publication;
    }
    public function setCategory(string $category){
        $this->category = $category;
    }
    public function getCategory():string{
        return $this->category;
    }
    public function setSummary(string $summary){
        $this->summary = $summary;
    }
    public function getSummary():string{
        return $this->summary;
    }
    public function setDisponibility(string $disponibility){
        $this->disponibility = $disponibility;
    }
    public function getDisponibility():string{
        return $this->disponibility;
    }
    public function setUserID(?int $userID){
        $this->userID = $userID;
    }
    public function getUserID():int{
        return $this->userID;
    }


    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    function __construct(?array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }


}
