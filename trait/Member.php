<?php


/**
 * Class Member
 */
class Member
{
    // intégration du trait StringUtils dans la classe
    use StringUtils;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Member
     */
    public function setFirstname(string $firstname): Member
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function displayFirstname($color = 'black')
    {
        // appel de la méthode venant du trait
        echo $this->asParagraph($this->firstname, $color);
    }
}
