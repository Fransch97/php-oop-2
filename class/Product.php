<?php

class Product{
    private $price;
    private $title;
    private $categorie;
    private $produced_country;
    private $saison_product = false;
    private $saison_start;
    private $saison_end;
    public function __construct($_price, $_title, $_categorie)
    {
        $this->price = $_price;  
        $this->title = $_title;
        $this->categorie = $_categorie;
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
    public function setProduced($_country){
        $this->produced_country = $_country;
    }
    public function setSaison($bool, $start_month,$endMonth){
        if($bool){
            $this->saison_start = $start_month;
            $this->saison_end= $endMonth;
        }
        $this->saison_product= $bool;
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
    public function getProduced(){
        return $this->produced_country ;
    }
    public function getSaison(){
        return $this->saison_product;
    }
    public function getSaisonStart(){
        return $this->saison_start;
    }
    public function getSaisonEnd(){
        return $this->saison_end;
    }
}