<?php
require_once __DIR__ . '/Product.php';

class Furniture extends Product{
    private $animal_type;
    private $size;
    private $dimensions;
    public function __construct($animal_type,$size,$dimensions,$_price, $_title, $_categorie, $_produced_country)
    {
        parent::__construct($_price, $_title, $_categorie, $_produced_country);
        $this->animal_type = $animal_type;  
        $this->title = $_title;
        $this->size = $size;
        $this->dimensions = $dimensions;
    }
}