<?php
require_once 'Cube.php';
require_once 'Texture.php';

/**
 * Une classe peut à la fois hériter d'une autre classe
 * et implémenter une ou plusieurs interfaces
 */
class De extends Cube implements Texture
{
    /**
     * @var string
     */
    private $matiere;

    /**
     * @var string
     */
    private $couleur;

    public function __construct(string $matiere, string $couleur)
    {
        $this
            ->setMatiere($matiere)
            ->setCouleur($couleur)
        ;
    }

    /**
     * @return string
     */
    public function getMatiere(): string
    {
        return $this->matiere;
    }

    /**
     * @param string $matiere
     * @return De
     */
    public function setMatiere(string $matiere): De
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     * @return De
     */
    public function setCouleur(string $couleur): De
    {
        $this->couleur = $couleur;

        return $this;
    }


}
