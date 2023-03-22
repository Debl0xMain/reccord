<?php

include("/home/antoine/Bureau/FormatioAfpa/reccord/src/php/requestsql/connect.php");
$db = connexionBase();

$requete = $db->query("
    SELECT COUNT(*) AS maxint FROM disc");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();


?>
    <?php foreach ($tableau as $disc): ?>
    <?php endforeach; ?>
    <?php
$idadd = $disc->maxint;
echo
        '<div class="container d-inline-flex reveal-1">
            <div class="mx-auto d-inline-flex">
                <h1>Liste des disque</h1>'.
                    '<div class="nbrdisque"><p>('. $disc->maxint.')</p>
                    </div>
            </div>
                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#add1">Add</button>
        </div>';

        include_once("add.php");


?>