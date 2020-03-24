<?php

use App\Cnx;

require_once 'autoload.php';

// pour avoir une instance unique de PDO :
$pdo = Cnx::getInstance();

function test()
{
    $pdo = Cnx::getInstance();
    var_dump($pdo);
}

include 'layout/top.php';
?>
<h1>Accueil</h1>
<?php
include 'layout/bottom.php';
?>
