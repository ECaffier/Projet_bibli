<?php
// Classe représetant les utilisateurs stockés en base de données
class User {

    protected int $userID;
    protected string $firstname;
    protected string $lastname;
    protected string $birthdate;
    protected string $email;
    protected int $card_number;


    public function setuserID(int $userID){
        $this->userID = $userID;
    }
    public function getuserID():int {
        return $this->userID;
    }
    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname():string{
        return $this->firstname;
    }
    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function getLastname():string{
        return $this->lastname;
    }
    public function setBirthdate(string $birthdate){
        $this->birthdate = $birthdate;
    }
    public function getBirthdate():string{
        return $this->birthdate;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function setCard_number(int $card_number){
        $this->card_number = $card_number;
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
