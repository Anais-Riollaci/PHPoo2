<?php

/*
require_once 'Database/Cnx.php';
require_once 'Smtp/Cnx.php';
require_once 'Database/Adapter/Postgresql.php';
*/
require_once 'autoload.php';

// le nom complet de la classe, ou nom pleinement qualifié
// (fully qualified name) est Database\Cnx
$dbCnx = new Database\Cnx();

$dbCnx->connect();

$mailCnx = new Smtp\Cnx();

echo '<br>';
$mailCnx->connect();

$pgAdapter = new Database\Adapter\Postgresql();
