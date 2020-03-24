<?php
class Article
{
    /**
     * @var string
     */
    private $titre;

    /**
     * @var string|null
     */
    private $auteur;

    /**
     * @var DateTime
     */
    private $datePublication;
    // impossible de donner une valeur par défaut à un attribut qui contient un objet
    //private $datePublication = new DateTime();

    /**
     * Constructeur de la classe
     * Cette méthode, si elle est présente, est appelée automatiquement
     * à l'instanciation de la classe
     * 
     * Le paramètre $titre est obligatoire (pas de valeur par défaut),
     * donc il faut lui donner une valeur
     */
    public function __construct(string $titre, ?string $auteur = null)
    {
        $this
            ->setTitre($titre)
            ->setAuteur($auteur)
            // pour affecter une valeur par défaut à un attribut qui contient un objet :
            ->setDatePublication(new DateTime())
        ;
    }


    /**
     * Méthode magique appelée automatiquement quand on utilise un objet comme une chaîne de caractère,
     * par exemple un echo dessus
     */
    public function __toString()
    {
        return $this->titre;
    }

    /**
     * Get the value of titre
     *
     * @return  string
     */ 
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param  string  $titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     *
     * @return  string
     */ 
    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @param  string  $auteur
     *
     * @return  self
     */ 
    public function setAuteur(?string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of datePublication
     *
     * @return  DateTime
     */ 
    public function getDatePublication(): DateTime
    {
        return $this->datePublication;
    }

    /**
     * Set the value of datePublication
     *
     * @param  DateTime  $datePublication
     *
     * @return  self
     */ 
    public function setDatePublication(DateTime $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }
}