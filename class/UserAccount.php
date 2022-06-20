<?php 
require_once __DIR__ . '/Custumer.php';
class UserAccount extends User{
    private $mail;
    private $password;


    public function __construct($_name,$_surname, $_birth_date, $_country, $_adress, $_card_date, $_mail, $_password)
    {
        parent:: __construct($_name,$_surname, $_birth_date, $_country, $_adress, $_card_date);
        $this->password = $_password;
        $this->mail = $_mail;
        $this->discount = 20;
    }
    //SETTER
    
    public function setMail($_mail){
        $this->mail = $_mail;
    }

    public function setPassword($_password){
        $this->password = $_password;
    }

    //GETTER
    public function getMail(){
        return $this->mail ;
    }

    public function getPassword(){
        return $this->password;
    }
    
}

?>