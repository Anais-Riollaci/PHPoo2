<?php
require_once 'Config.php';
require_once 'Commande.php';

// on accède à la constante de classe avec l'opérateur de résolution de portée ::
echo Config::RACINE_WEB;

echo '<br>' . Config::getPath('produit.php');

// fatal error, l'attribut est privé
//echo Commande::$nbCommandes;

echo '<br>' . Commande::getNbCommandes(); // 0
$commande = new Commande();
echo '<br>' . Commande::getNbCommandes(); // 1
$commande2 = new Commande();
echo '<br>' . Commande::getNbCommandes(); // 2

// warning, cf la condition dans le setter 
$commande->setStatus('délivrée');

// on peut accéder aux attributs et méthodes statiques depuis
// un objet de la classe, mais on évite pour plus de clarté
echo '<br>' . $commande::getNbCommandes();

// fatal error : la méthode statique utilise $this
//Commande::displayStatus();

// faire une liste déroulante à partir de l'attribut statique acceptedStatuses de Commande
var_dump(Commande::$acceptedStatuses);
?>
<select name="status">
<?php
foreach (Commande::$acceptedStatuses as $status) :
?>
    <option value="<?= $status ?>"><?= ucfirst($status) ?></option>
<?php
endforeach;
?>
</select>
