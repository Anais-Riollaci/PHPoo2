<?php
class Utilisateur
{
    /**
     * Un commentaire de documentation (avec /**)
     * 
     * Attribut (ou propriété) de la classe (=variable interne)
     * 
     * un tag pour préciser le type de la variable et événtuellement sa description
     * @var string Le prenom de l'utilisateur
     */
    public $prenom = 'Julien';

    /**
     * Un attribut sans valeur par défaut (= null)
     * 
     * une chaîne de caractères ou null
     * @var string|null
     */
    public $nom;

    /**
     * Un attribut privé
     * 
     * @var int
     */
    private $age = 20;

    /**
     * Une méthode = une fonction interne à la classe
     * 
     * @return string
     */
    public function nomComplet()
    {
        // $this dans une méthode fait référence à l'objet qui appelle la méthode
        return rtrim($this->prenom . ' ' . $this->nom);
    }

    /**
     * @return string
     */
    public function infos()
    {
        // on ne peut accéder à l'attribut age qu'à l'intérieur des méthodes
        return $this->nomComplet() . ', ' . $this->age . ' ans';
    }

    // Ecrire une méthode qui fait vieillir l'utilisateur d'un an

    /**
     * @return null
     */
    public function anniversaire()
    {
        $this->age++;
    }

}

// instanciation de la classe = création un objet à partir de la classe
$moi = new Utilisateur();

// la flèche pour accéder à l'attribut de l'objet
echo $moi->prenom;

$toi = new Utilisateur();

// affectation d'une valeur à l'attribut prenom de l'objet 
$toi->prenom = 'Thomas';

echo '<br>' . $moi->prenom; // Julien
echo '<br>' . $toi->prenom; // Thomas

// on ne peut pas faire un echo sur un objet :
// echo $moi; // fatal error

var_dump($moi->nom); // null

$toi->nom = 'Dupont';

// appel de la méthode nomComplet
echo $toi->nomComplet();

echo '<br>' . $moi->nomComplet();

// Fatal error : impossible d'accéder à un attribut privé depuis un objet Utilisateur
//echo $moi->age;

echo '<br>' . $toi->infos(); // 20 ans
// appel à la méthode
$toi->anniversaire();
echo '<br>' . $toi->infos(); // 21 ans

var_dump($toi);

// création d'un attribut à la volée
// A éviter, si on a besoin d'un nouvel attribut, on l'ajoute à la classe
$toi->adresse = '2 Rue Sedaine';

var_dump($toi);

$array = ['pseudo' => 'Ben', 'email' => 'ben@gmail.com'];

// conversion du tableau en objet
// l'objet appartient à la classe de base en PHP : stdClass
$obj = (object)$array; 

var_dump($obj);


// erreur : array to string conversion
//$str = (string)$array;

// création d'un objet à la volée
$lui = new stdClass();
$lui->nomComplet = 'Julien Anest';

var_dump($lui);

// retourne la classe à laquelle appartient un objet
echo get_class($toi); // Utilisateur