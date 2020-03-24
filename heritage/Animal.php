<?php
/*
Une classe abstraite ne sert qu'à être héritée,
elle ne peut pas être instanciée
*/
abstract class Animal
{
    /**
     * @return string
     */
    public function identifier(): string
    {
        return 'Je suis un animal';
    }

    abstract public function crier(): string;
}