<?php
class User{
    private $name;
    private $surname;
    private $birth_date;
    private $country;
    private $adress;
    private $card_date;
    private $success = false;
    private $mail;
    private $password;
    private $discount = 0;


    public function __construct($_name,$_surname, $_birth_date, $_country, $_adress, $_card_date)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->birth_date = $_birth_date;
        $this->country = $_country;
        $this->adress = $_adress;
        $this->card_date = $_card_date;
    }

    //SETTER

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;

    }

    public function setBirthDate($_birth_date){
        $this->birth_date = $_birth_date;
    }

    public function setCountry($_country){
        $this->country = $_country;
    }

    public function setAdress($_adress){
        $this->adress = $_adress;
    }

    public function setCardDate($_card_date){
        if(!($_card_date > date("Y-m-d" ))){
            $this->card_date = $_card_date;
            $this->success = true;
        }else{
            echo "carta scaduta";
        }
    }

    public function setDiscount($_discount){
            $this->discount = $_discount;
    }


    //GETTER
    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname ;

    }

    public function getBirthDate(){
        return $this->birth_date;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function getCardDate(){
        return $this->card_date;
    }

    public function getDiscount(){
        return $this->discount ;
    }


    //FUNCTION'S
    public function PayTransition(){
        if($this->success){
            echo 'pagamento in corso';
        }
    }
}
?>