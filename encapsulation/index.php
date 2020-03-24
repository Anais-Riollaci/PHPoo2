<?php
require_once 'Personne.php';

$pierre = new Personne();

// on passe par le setter pour affecter une valeur à l'attribut
$pierre->setPrenom('Pierre');

// fatal error : l'attribut est privé
//$pierre->prenom = 'Pierre';

// on passe par le getter pour accéder à la valeur de l'attribut
echo $pierre->getPrenom();

$pierre->setPrenom('1234'); // warning

echo '<br>' . $pierre->getPrenom(); // toujours Pierre

$paul = new Personne();

// appel chaîné aux setters : possible grâce aux return $this dans les setters
// = interface fluide (fluent setters en anglais)
$paul
    ->setPrenom('Paul')
    ->setNom('Bismuth')
;
// au lieu de :
//$paul->setPrenom('Paul');
//$paul->setNom('Bismuth');