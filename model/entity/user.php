<?php
// Classe représetant les utilisateurs stockés en base de données
class User {

    protected int $userID;
    protected string $firstname;
    protected string $lastname;
    protected string $birthdate;
    protected string $email;
    protected float $card_number;


    public function setuserID(int $userID){
        $this->bookID = $bookID;
    }
    public function getuserID():int{
        return $this->userID;
    }
    public function setFirstname(int $firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname():int{
        return $this->firstname;
    }
    public function setLastname(int $lastname){
        $this->lastname = $lastname;
    }
    public function getLastname():int{
        return $this->lastname;
    }
    public function setBirthdate(int $birthdate){
        $this->birthdate = $birthdate;
    }
    public function getBirthdate():int{
        return $this->birthdate;
    }
    public function setEmail(int $email){
        $this->email = $email;
    }
    public function getEmail():int{
        return $this->email;
    }
    public function setCard_number(int $card_number){
        $this->card_nummber = $card_number;
    }
    public function getCard_number():int{
        return $this->card_number;
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
