<?php

use Model\Abonne;

require_once 'autoload.php';

// contient un tableau d'objets Abonne
$abonnes = Abonne::findAll();

include 'layout/top.php';
?>
    <h1>Gestion abonnés</h1>

    <a class=""btn-outline-primary mb-3" href="abonne-edit.php">
        ajouter un abonné
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Prenom</th>
            <th width="250px"></th>
        </tr>
        <?php
            foreach($abonnes as$abonne) :
         ?>
        <tr>
            <td><?= $abonne->getId() ?></td>
            <td><?= $abonne->getPrenom() ?></td>
            <td>
                <a class="btn btn-primary" href="abonne-edit.php?id=<?= $abonne->getId()?>">
                    Modifier
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="abonne-delete.php?id=<?= $abonne->getId()?>">
                    Supprimer
                </a>
            </td>
        </tr>
        <?php
        endforeach
        ?>
    </table>

<?php
include 'layout/bottom.php';
?>
