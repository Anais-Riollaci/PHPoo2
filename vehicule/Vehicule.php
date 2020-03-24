<?php
abstract class Vehicule
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var int
     */
    private $vitesse = 0;

    /**
     * @var int
     */
    private $contenanceReservoir;

    private static $carburantsAcceptes = [
        'SP95',
        'SP98'
    ];

    /**
     * @var int
     */
    private $contenuReservoir;

    public function __construct(
        string $typeCarburant,
        int $vitesseMax,
        int $contenanceReservoir,
        int $contenuReservoir
    ) {
        $this
            ->setTypeCarburant($typeCarburant)
            ->setVitesseMax($vitesseMax)
            ->setContenanceReservoir($contenanceReservoir)
            ->setContenuReservoir($contenuReservoir)
        ;
    }

    /**
     * Get the value of typeCarburant
     *
     * @return  string
     */ 
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @param  string  $typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant(string $typeCarburant): self
    {
        if (!in_array($typeCarburant, self::$carburantsAcceptes)) {
            trigger_error(
                'Le type de carburant doit être ' . implode(' ou ', self::$carburantsAcceptes),
                E_USER_ERROR
            );
        }

        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * Get the value of vitesseMax
     *
     * @return  int
     */ 
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     *
     * @param  int  $vitesseMax
     *
     * @return  self
     */ 
    public function setVitesseMax(int $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    /**
     * Get the value of vitesse
     *
     * @return  int
     */ 
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @param  int  $vitesse
     *
     * @return  self
     */ 
    public function setVitesse(int $vitesse): self
    {
        // si la vitesse dépasse la vitesse max,
        // on redéfinit la vitesse à la valeur de la vitesse max du véhicule
        if ($vitesse > $this->vitesseMax) {
            $vitesse = $this->vitesseMax;
        }

        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of contenanceReservoir
     *
     * @return  int
     */ 
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * Set the value of contenanceReservoir
     *
     * @param  int  $contenanceReservoir
     *
     * @return  self
     */ 
    public function setContenanceReservoir(int $contenanceReservoir): self
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }

    /**
     * Get the value of contenuReservoir
     *
     * @return  int
     */ 
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * Set the value of contenuReservoir
     *
     * @param  int  $contenuReservoir
     *
     * @return  self
     */ 
    public function setContenuReservoir(int $contenuReservoir): self
    {
        $this->contenuReservoir = $contenuReservoir;

        return $this;
    }

    public function accelerer(int $kmh): void
    {
        $this->setVitesse($this->vitesse + $kmh);
    }

    public function fairePlein(Pompe $pompe)
    {
        if ($this->typeCarburant != $pompe->getTypeCarburant()) {
            echo 'Stop ! Erreur de pompe';

            // pour ne pas faire le plein :
            return;
        }

        // qté de carburant nécessaire pour faire le plein
        $besoinCarburant = $this->contenanceReservoir - $this->contenuReservoir;

        // si la pompe ne contient pas assez de carburant
        if ($besoinCarburant > $pompe->getContenu()) {
            //on redéfinit le besoin avec le contenu de la pompe
            $besoinCarburant = $pompe->getContenu();
        }

        // MAJ du contenu du réservoir du véhicule
        $this->setContenuReservoir($this->contenuReservoir + $besoinCarburant);

        // MAJ du contenu de la cuve de la pompe
        $pompe->setContenu($pompe->getContenu() - $besoinCarburant);
    }

    abstract public function getNbRoues(): int;
}