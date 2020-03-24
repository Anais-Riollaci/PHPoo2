<?php


namespace Model;


use App\Cnx;

/**
 * Class Abonne
 * @package Model
 */
class Abonne
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Abonne
     */
    public function setId(?int $id): Abonne
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     * @return Abonne
     */
    public function setPrenom(?string $prenom): Abonne
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function save()
    {
        $pdo = Cnx::getInstance();
        if(empty$this->id_abonne){

        $query = 'INSERT INTO abonne (prenom) VALUE (:prenom)';
        $stmt = $pdo->prepare ($query);
        $stmt->execute([
            //bind value avec la valeur de 'attribut de l'objet
            ':prenom' =>$this->prenom
        ]);
    }else{
            $query = 'UPDATE abonne SET prenom = :prenom WHERE id_abonne = :id_abonne';
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':prenom'
            ])
        }

    /**
     * @param array $errors le tableau qui va contenir les erreurs, passé par référence
     * @return bool valide ou invalide
     */
     public function validate(array &$errors): bool
        {
         if(empty($this->prenom)){
             $errors[] ='Le prénom est obligatoire';
         }elseif (mb_strlen($this->prenom) > 20) {
             $errors[]= 'Le prenom ne doit pas faire plus de 20 caractères';
         }

         return empty($errors);
        }
    /**
     * @return Abonne[]
     */
    public static function findAll(): array
    {
        $pdo = Cnx::getInstance();

        // retourner un tableau d'objets Abonne au lieu du tableau multidimentionnel
        // que retourne le fetchAll() de PDO
        // et l'utiliser dans abonnes.php pour lister les abonnés dans un tableau HTML

        $stmt = $pdo->query("SELECT*FROM abonne ORDER BY id_abonne");
        $result = $stmt->fetchALL();

        $abonnes = [];

        foreach ($result as $data) {
            $abonne = new self();

            $abonne
            ->setId($data['id_abonne'])
             ->setPrenom($data['prenom'])
            ;
            $abonnes[]= $abonne;
        }
            return $abonnes;
    }
    public static function find(int $id_abonne): self
    {
        $pdo = Cnx::getInstance();

        $query = 'SELECT*FROM abonne WHERE id = ' . $id_abonne


    }
}
}
