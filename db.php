<?php

require_once __DIR__.'/Models/Category.php';
require_once __DIR__.'/Models/Product.php';
require_once __DIR__.'/Models/Food.php';
require_once __DIR__.'/Models/Toy.php';
require_once __DIR__.'/Models/House.php';

//Creo le categorie
$dog = new Category();
$cat = new Category();
$fish = new Category();
$bird = new Category();

$dog->set_name('Cane');
$dog->set_icon('assets/img/dog.png');

$cat->set_name('Gatto');
$cat->set_icon('assets/img/cat.png');

$fish->set_name('Pesce');
$fish->set_icon('Assets/img/fish.png');

$bird->set_name('Uccello');


//Creo i prodotti in base alla loro tipologia: Cibo, Gioco, Cuccia

//Cibo per cani
$dog_food = new Food();
$dog_food->set_name('Crocchette');
$dog_food->set_price(5);
$dog_food->set_image('assets/img/crocchette.png');
$dog_food->set_category($dog);
$dog_food->set_expiration('2026-05-13');
$dog_food->set_ship(false);

//Cibo per gatti
$cat_food = new Food();
$cat_food->set_name('Pappa al pesce');
$cat_food->set_price(2.30);
$cat_food->set_image('assets/img/pappa-al-pesce.jpg');
$cat_food->set_category($cat);
$cat_food->set_expiration('2027-08-22');
$cat_food->set_ship(false);

//Palla per cani
$dog_toy = new Toy();
$dog_toy->set_name('Palla');
$dog_toy->set_price(1.50);
$dog_toy->set_image('assets/img/palla-per-cani.jpg');
$dog_toy->set_category($dog);
$dog_toy->set_material('Plastica dura');
$dog_toy->set_ship(true);

//Acquario per pesci
$fish_bowl = new House();
$fish_bowl->set_name('Acquario');
$fish_bowl->set_price(7);
$fish_bowl->set_image('assets/img/boccia-per-pesci.jpg');
$fish_bowl->set_category($fish);
$fish_bowl->set_type('Indoor');
$fish_bowl->set_ship(true);

//Gabbia per uccelli
$bird_cage = new House();
$bird_cage->set_name('Gabbia per uccelli');
$bird_cage->set_price(14);
$bird_cage->set_image('assets/img/gabbia-per-uccelli.jpg');
$bird_cage->set_category($bird);
$bird_cage->set_type('Outdoor');
$bird_cage->set_ship(true);

$products = [
    $dog_food,
    $cat_food,
    $dog_toy,
    $fish_bowl,
    $bird_cage
]

?>