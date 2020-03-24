<?php
class Individu
{
    /**
     * @var string
     */
    private $prenom = 'Julien';

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var DateTime
     */
    private $dateNaissance;

    /**
     * Get the value of prenom
     * Le : string oblige la méthode à retourne une chaîne de caractères
     *
     * @return  string
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     * La méthode retourne un objet instance d'Individu
     * Quand la classe est celle dans laquelle on est,
     * on peut aussi écrire : self
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom): Individu
    {
        var_dump($prenom); // string
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     * Le point d'interrogation devant le typage veut dire soit ce type, soit null
     *
     * @return  string|null
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * Le point d'interrogation devant le typage veut dire soit ce type, soit null
     *
     * @param  string|null $nom
     *
     * @return  self
     */ 
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     * Retourne un objet DateTime ou null ()
     *
     * @return  DateTime
     */ 
    public function getDateNaissance(): ?DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @param  DateTime  $dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance(DateTime $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateNaissanceAsString(string $defaut = ''): string
    {
        // si l'attribut dateNaissance est un objet DateTime
        if ($this->dateNaissance instanceof DateTime) {
            return $this->dateNaissance->format('d/m/Y');
        }

        return $defaut;
    }
}