<?php
require_once 'autoload.php';


try {
    // throw pour jeter une exception (= une erreur)
    throw new Exception('Une erreur est survenue');

    // le code dans le bloc try après qu'une exception a été jetée
    // n'est pas exécuté
    echo 'ici';

// on entre dans le catch() dès qu'une exception a été jetée
} catch (Exception $e) {
    // retourne le message passé à l'instanciation de l'exception
    echo $e->getMessage();
}

echo '<br>';

try {
    $user = new User();

    $user->setFirstname('123');
} catch (Exception $e) {
    echo 'Une erreur est survenue';
    Logger::log($e);
}

echo '<br>';

try {
    $user = new User();
    $user->setLastname('123');
} catch (InvalidArgumentException $e) {
    echo "Erreur d'argument";
    Logger::log($e);
}

echo '<br>';

try {
    $user = new User();
    $user->setLastname('123');
} catch (InvalidArgumentException $e) {
    echo "Erreur d'argument";
    Logger::log($e);
} catch (Exception $e) {
    echo 'Une erreur est survenue';
    Logger::log($e);
}

echo '<br>';

try {
    $user = new User();
    $user->setBirthdate('2000-01-01');
// Error et les classes qui en héritent sont jetées pour la plupart des fatal errors
} catch (Error $e) {
    echo 'Une erreur est survenue';
    Logger::log($e);
}

try {
    $user = new User();
    $user->setBirthdate('2000-01-01');
// Throwable est l'interface qu'implémentent à la fois Exception et Error
} catch (Throwable $e) {
    echo 'Une erreur est survenue';
    Logger::log($e);
}
