<?php
require_once 'Article.php';

// erreur : le paramètre $titre est obligatoire dans le constructeur 
//$article = new Article();

$article = new Article('Un virus, ah bon ?');
echo $article->getTitre();

$article2 = new Article('Où sont les pâtes ?', 'Regina');

var_dump($article, $article2);

// affiche ce que retourne la méthode __toString
echo $article2;
echo '<br>' . $article2->getDatePublication()->format('d/m/Y');