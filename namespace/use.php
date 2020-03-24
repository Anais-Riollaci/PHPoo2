<?php

// le use permet d'utiliser le nom court de la classe (sans le préfixe de namespace)
// dans le reste du fichier
use Database\Adapter\Postgresql;
use Database\Cnx;
/*
 * Comme on utilise 2 classes dont le nom court est Cnx,
 * on en aliase L'une des 2
 */
use Smtp\Cnx as MailCnx;

require_once 'Database/Cnx.php';
require_once 'Smtp/Cnx.php';
require_once 'Database/Adapter/Postgresql.php';

// instanciation de Database\Cnx
$dbCnx = new Cnx();

$pgAdapter = new Postgresql();

// instanciation de Smtp\Cnx
$mailCnx = new MailCnx();
