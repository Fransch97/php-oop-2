<?php

class Product{
    private $price;
    private $title;
    private $categorie;
    private $produced_country;
    public function __construct($_price, $_title, $_categorie, $_produced_country)
    {
        $this->price = $_price;  
        $this->title = $_title;
        $this->categorie = $_categorie;
        $this->produced_country = $_produced_country;
    }

    //SETTER
    public function setPrice($_price){
        $this->price = $_price;
    }
    public function setTitle($_title){
        $this->title = $_title;
    }
    public function setCategorie($_categorie){
        $this->categorie = $_categorie;
    }

    //GETTER

    public function getPrice(){
        return $this->price;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getCategorie(){
        return $this->categorie;
    }

    
}