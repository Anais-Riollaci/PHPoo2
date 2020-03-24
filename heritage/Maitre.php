<?php
class Maitre
{
    /**
     * @var Animal
     */
    private $animal;

    public function __construct(Animal $animal)
    {
        $this->setAnimal($animal);
    }

    /**
     * Get the value of animal
     *
     * @return  Animal
     */ 
    public function getAnimal(): Animal
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     *
     * @param  Animal  $animal
     *
     * @return  self
     */ 
    public function setAnimal(Animal $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    public function caresserAnimal()
    {
        return $this->animal->crier();
    }
}