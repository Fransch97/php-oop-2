<?php
$users = [
    [
        'name' => "francesco",
        'surname' => "ercoli",
        'birth_date' => "1997/02/27",
        'country' => "italia",
        'adress' => "via ughi",
        'card_date' => "2025/02/25",
    ],
    [
        'name' => "steffan",
        'surname' => "ercoli",
        'birth_date' => "1997/02/27",
        'country' => "italia",
        'adress' => "via ughi",
        'card_date' => "2025/02/25",
        'mail' => "Ste39403@info.com",
        'password' => "paperelleDolci23"
    ],
    [
        'name' => "raffael",
        'surname' => "ercoli",
        'birth_date' => "1997/02/27",
        'country' => "italia",
        'adress' => "via ughi",
        'card_date' => "2025/02/25",
    ]
];


$products = [
    [
        'class' => 'game',
        'price' => 23.32,
        'title' => "gioco per cani",
        'categorie' => "piscina",
        'bestAge' => "2 anni",
        'warnings' => "Non far giocare ai bambini",
        "produced" => "Italy"
    ],
    [
        'class' => 'food',
        'price' => 25.32,
        'title' => "cibo per gatti",
        'categorie' => "gatti",
        'expiration_date' => "23/09/2023",
        'content' => "cibo",
        "produced" => "Italy"
    ],
    [
        'class' => 'furniture',
        'price' => 125.32,
        'title' => "Aquario per pesci",
        'categorie' => "Mobili",
        'animal_type' => "Pesci",
        'size' => "pesci piccoli",
        'dimensions' =>"200x120x80",
        "produced" => "Italy"

    ]
];

require_once __DIR__ . '/../class/Custumer.php';
require_once __DIR__ . '/../class/UserAccount.php';
require_once __DIR__ . '/../class/Product.php';
require_once __DIR__ . '/../class/Food.php';
require_once __DIR__ . '/../class/Furniture.php';
require_once __DIR__ . '/../class/Games.php';
