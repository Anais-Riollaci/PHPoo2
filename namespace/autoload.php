<?php
// cette fonction est appelée automatiquement au moment
// où on utilise une classe contenu dans un fichier qui n'a pas été inclus
spl_autoload_register(function ($classname) {
    // echo $classname; // Database\Cnx

    // __DIR__ = le répertoire dans lequel ce fichier se trouve
    //echo __DIR__ . '/' . $classname . '.php';

    //require_once __DIR__ . '/' . $classname . '.php';

    // DIRECTORY_SEPARATOR = le séparateur de répertoire de l'OS que l'on utilise
    // (\ sous windows, / sous linux et mac)
    // echo __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
});
