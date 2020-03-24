<?php

/**
 * Class User
 */
class User
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var DateTime
     */
    private $birthdate;

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     */
    public function setFirstname(string $firstname): User
    {
        if (ctype_digit($firstname)) {
            throw new Exception('Le prénom ne doit pas être un nombre');
        }

        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname(string $lastname): User
    {
        if (ctype_digit($lastname)) {
            // InvalidArgumentException est une classe native de PHP qui hérite d'Exception
            throw new InvalidArgumentException('Le nom ne doit pas être un nombre');
        }

        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param DateTime $birthdate
     * @return User
     */
    public function setBirthdate(DateTime $birthdate): User
    {
        $this->birthdate = $birthdate;

        return $this;
    }


}
