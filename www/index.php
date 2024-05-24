<?php

// require dy fichier
require 'Card.php';

//on va instancier notre class dans une variable
//pour creér un objet on utilise le mot clé "new" suivi du nom de la class
$card = new Card(5, 100);


var_dump($card->getPriceTotal());
var_dump($card->getQuantity());
//on va modifier price total
$card->setPriceTotal(200);
$card->setQuantity(80);

var_dump($card->getPriceTotal());
var_dump($card->getQuantity());



