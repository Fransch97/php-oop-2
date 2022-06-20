<?php
require_once __DIR__ . '/Product.php';

class Game extends Product{
    private $bestAge;
    private $warnings;
    public function __construct($_bestAge,$_warnings,$_price, $_title, $_categorie, $_produced_country)
    {
        parent::__construct($_price, $_title, $_categorie, $_produced_country);
        $this->bestAge = $_bestAge;
        $this->warnings = $_warnings;
    }
    //SETTER
    public function setBestAge($_bestAge){
        $this->bestAge = $_bestAge;
    }
    public function setWarnings($_warnings){
        $this->warnings = $_warnings;
    }
    //GETTER
    public function getBestAge(){
        return $this->bestAge;
    }
    public function getWarnings(){
        return $this->warnings;
    }
}