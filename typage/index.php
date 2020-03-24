<?php
require_once 'Individu.php';

$jean = new Individu();

// fatal error : le paramètre attendu par setPrenom est typé string
//$jean->setPrenom(['prenom' => 'Jean']);

// pas d'erreur, l'entier 123 est converti en string '123'
$jean->setPrenom(123);

$prenom = null;
// erreur le paramètre attendu par setPrenom ne peut pas être null
//$jean->setPrenom($prenom);

var_dump($jean->getDateNaissance()); // null

// erreur : le paramètre attendu par setDateNaissance doit être un objet instance de DateTime
//$jean->setDateNaissance('2000-02-05');

$dateNaissance = new DateTime('2000-02-05');
$jean->setDateNaissance($dateNaissance);
// erreur : un objet DateTime ne peut pas être converti en string
//echo $jean->getDateNaissance();
// méthode format() de la classe DateTime pour l'affichage
echo $jean->getDateNaissance()->format('d/m/Y');

$rene = new Individu();
// erreur : l'attribut dateNaissance est null
//echo $rene->getDateNaissance()->format('d/m/Y');

var_dump($rene->getDateNaissanceAsString()); // chaîne vide
var_dump($rene->getDateNaissanceAsString('inconnue')); // inconnue
