<?php
require_once 'Animal.php';

/*
La classe Chien hérite d'Animal
*/
class Chien extends Animal
{
    /**
     * Implémentation de la méthode abstraite crier définie dans Animal
     * = sa définition concrète
     */
    public function crier(): string
    {
        return 'Ouaf';
    }

    public function mangerSucre(): void
    {
        echo 'Miam';
    }
}