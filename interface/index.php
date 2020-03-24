<?php
require_once 'Cube.php';
require_once 'Sphere.php';
require_once 'Brique.php';
require_once 'De.php';

function getFormeVolume(Volume $volume) {
    echo 'La forme du volume est : ' . $volume->getForme();
}

function getCouleurTexture(Texture $texture) {
    echo 'La couleur de la texture est : ' . $texture->getCouleur();
}

$cube = new Cube();

getFormeVolume($cube);

var_dump($cube instanceof Cube); // true

var_dump($cube instanceof Volume); // true

$sphere = new Sphere();

getFormeVolume($sphere);

$brique = new Brique();

echo '<br>';
getFormeVolume($brique);
echo '<br>';
getCouleurTexture($brique);

var_dump($brique instanceof Volume); // true
var_dump($brique instanceof Texture); // true

$de = new De('plastique', 'rouge');

var_dump($de instanceof De); // true
// par héritage :
var_dump($de instanceof Cube); // true
// par implémentation :
var_dump($de instanceof Texture); // true
// parce que Cube implémente Volume :
var_dump($de instanceof Volume); // true

echo '<br>';
getFormeVolume($de);
echo '<br>';
getCouleurTexture($de);

