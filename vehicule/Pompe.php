<?php
class Pompe
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenance;

    /**
     * @var int
     */
    private $contenu;

    private static $carburantsAcceptes = [
        'SP95',
        'SP98'
    ];

    public function __construct(
        string $typeCarburant,
        int $contenance,
        int $contenu
    ) {
        $this
            ->setTypeCarburant($typeCarburant)
            ->setContenance($contenance)
            ->setContenu($contenu)
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
     * Get the value of contenance
     *
     * @return  int
     */ 
    public function getContenance(): int
    {
        return $this->contenance;
    }

    /**
     * Set the value of contenance
     *
     * @param  int  $contenance
     *
     * @return  self
     */ 
    public function setContenance(int $contenance): self
    {
        $this->contenance = $contenance;

        return $this;
    }

    /**
     * Get the value of contenu
     *
     * @return  int
     */ 
    public function getContenu(): int
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @param  int  $contenu
     *
     * @return  self
     */ 
    public function setContenu(int $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }
}