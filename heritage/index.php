<?php
require_once 'Animal.php';
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Maitre.php';
require_once 'Siamois.php';
// la classe SiamoisAngora ne doit pas exister car elle hérite d'une classe déclarée finale
//require_once 'SiamoisAngora.php';

//impossible d'instancier la classe Animal car elle est déclarée abstraite
//$animal = new Animal();
//echo $animal->identifier();

$chien = new Chien();
$chat = new Chat();

// appel à la méthode identifier définie dans Animal
// depuis des objets des classes qui en héritent
echo '<br>' . $chien->identifier();
// résultat différent car la méthode est surchargée dans Chat
echo '<br>' . $chat->identifier();

// parce que Chat et Chien héritent d'Animal,
// elle implémentent forcement la méthode crier
echo '<br>' . $chien->crier();
echo '<br>' . $chat->crier();

$humain = new Humain();

echo '<br>';
$humain->donnerSucre($chien);

// erreur à cause du typage du paramètre
//$humain->donnerSucre($chat);

echo '<br>';
echo $humain->caresser($chien);
echo '<br>';
echo $humain->caresser($chat);

var_dump($chat instanceof Chat); // true
// par héritage un objet instance de Chat est aussi instance d'Animal
var_dump($chat instanceof Animal); // true

$milou = new Chien();
$tintin = new MaitreChien($milou);

// pour faire aboyer milou :
echo $tintin->getChien()->crier();
// ou :
echo '<br>' . $tintin->caresserChien();

$garfield = new Chat();
$jon = new Maitre($garfield);

$zeus = new Chien();
$higgins = new Maitre($zeus);

echo '<br>' . $jon->caresserAnimal();
echo '<br>' . $higgins->caresserAnimal();

$siamois = new Siamois();

var_dump($siamois instanceof Siamois); // true
// par héritage :
var_dump($siamois instanceof Chat); // true
// parce que Chat hérite d'Animal :
var_dump($siamois instanceof Animal); // true

$siamois->ronronner();

echo '<br>' . $siamois->decrire();

// erreur : un attribut protégé, comme un attribut privé
// n'est pas accessible depuis un objet 
//echo $siamois->couleurYeux;
echo '<br>' . $siamois->getCouleurYeux();