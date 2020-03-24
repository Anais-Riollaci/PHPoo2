<?php
require_once 'Animal.php';

/*
La classe Chat hérite d'Animal
*/
class Chat extends Animal
{
    /**
     * @var string
     */
    private $couleur = 'noire';

    /**
     * @var string
     */
    protected $couleurYeux = 'bleus';

    /**
     * Surcharge (=redéfinition) de la méthode identifier définie dans Animal
     * 
     * @return string
     */
    public function identifier(): string
    {
        // parent::identifier() = ce que retourne la méthode identifier de la classe Animal
        return parent::identifier() . ' et je suis un chat';
    }

    /**
     * Implémentation de la méthode abstraite crier définie dans Animal
     * = sa définition concrète
     */
    public function crier(): string
    {
        return 'Miaou';
    }

    /**
     * une méthode finale ne peut pas être surchargée
     */
    final public function ronronner(): void
    {
        echo 'Ronron';
    }

    /**
     * Get the value of couleur
     *
     * @return  string
     */ 
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param  string  $couleur
     *
     * @return  self
     */ 
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of couleurYeux
     *
     * @return  string
     */ 
    public function getCouleurYeux(): string
    {
        return $this->couleurYeux;
    }

    /**
     * Set the value of couleurYeux
     *
     * @param  string  $couleurYeux
     *
     * @return  self
     */ 
    public function setCouleurYeux(string $couleurYeux): self
    {
        $this->couleurYeux = $couleurYeux;

        return $this;
    }
}