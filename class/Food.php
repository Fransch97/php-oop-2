<?php
require_once __DIR__ . '/Product.php';
class Food extends Product{
    private $expiration_date;
    private $eat_content;
    public function __construct($_expiration, $_eat_content,$_price, $_title, $_categorie, $_produced_country)
    {
        parent::__construct($_price, $_title, $_categorie, $_produced_country);
        $this->expiration_date = $_expiration;
        $this->eat_content = $_eat_content;
    }

    //SETTER
    public function setExpiration_Date($date)
    {
        $this->expiration_date = $date;
    }
    public function setEatContent($content)
    {
        $this->eat_content = $content;
    }

    //GETTER
    public function getExpiration_Date()
    {
        return $this->expiration_date;
    }
    public function getEatContent()
    {
        return $this->eat_content;
    }
}