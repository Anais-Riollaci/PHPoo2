<?php
require_once 'Chien.php';

class MaitreChien
{
    /**
     * @var Chien
     */
    public $chien;   

    public function __construct(Chien $chien)
    {
        $this->setChien($chien);
    }

    /**
     * Get the value of chien
     *
     * @return  Chien
     */ 
    public function getChien(): Chien
    {
        return $this->chien;
    }

    /**
     * Set the value of chien
     *
     * @param  Chien  $chien
     *
     * @return  self
     */ 
    public function setChien(Chien $chien): self
    {
        $this->chien = $chien;

        return $this;
    }

    /**
     * @return string
     */
    public function caresserChien(): string
    {
        return $this->chien->crier();
    }
}