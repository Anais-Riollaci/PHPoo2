<?php
require_once 'autoload.php';

use Animal\Continent\Afrique\Elephant as ElephantAfrique;
use Animal\Continent\Afrique\Gazelle;
use Animal\Continent\Asie\Elephant as ElephantAsie;
use Animal\Fourmi;

// instanciation de Animal\Continent\Afrique\Elephant
$elephantAfrique = new ElephantAfrique();

// instanciation de Animal\Continent\Asie\Elephant
$elephantAsie = new ElephantAsie();

$gazelle = new Gazelle();
$gazelle->voirElephant();
echo '<br>';
$gazelle->etreVue();

$fourmi = new Fourmi();
echo '<br>';
$fourmi->voirElephantAfrique();

echo '<br>';
$fourmi->voirElephant('afrique');
echo '<br>';
$fourmi->voirElephant('asie');
echo '<br>';
$fourmi->voirElephant('europe');


echo '<br>';
// ::class est utilisable sur toutes les classes et retourne le nom complet de la classe
// sous forme d'une chaîne de caractères
echo Gazelle::class;
