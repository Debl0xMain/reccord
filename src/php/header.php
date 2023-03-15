<?php

$requete = $db->query("
    SELECT *
    FROM disc
    order by disc_id DESC
    LIMIT 0, 1");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

?>
    <?php foreach ($tableau as $disc): ?>
    <?php endforeach; ?>
    <?php

echo
        '<div class="container d-inline-flex">
            <div class="mx-auto d-inline-flex">
                <h1>Liste des disque</h1>'.
                    '<div class="nbrdisque"><p>('.$disc->disc_id.')</p>
                    </div>
            </div>
                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#add1">Add</button>
        </div>'
?>