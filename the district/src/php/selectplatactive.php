<?php
include('./src/sql/connect.php');
$db = connexionBase();

$requete = $db->query("
-------
SELECT COUNT(*) AS maxint FROM categorie
-------");
$counttable = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

foreach ($countplat as $plat):

$nbrplat = $plat->maxint;
endforeach;
$requete = $db->query("
----------
    SELECT * 
    FROM categorie
    order by id DESC
    LIMIT 0, 1
    -------");

$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
foreach ($tableau as $affplat):
endforeach;
$selectplat = 0;
$rowplat = 0;
$revealcount = 0;

do {

    if ($rowplat == 0) {
        echo '<div class="row my-2 mx-5 text-center row-cols-3">';
        $rowplat++;
    }

    if ($rowplat == 1 || $rowplat == 2 || $rowplat == 3) {
        
        $requete = $db->query("
        SELECT *
        FROM categorie
        Limit $selectplat,1
        ");
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        foreach ($tableau as $plat);

        $libelleplat = $plat->libelle;
        $descplat = $plat->description;
        $imageplat = $plat->image;
        $onoffplat = $plat->active;
        $id_categorieplat = $plat->$id_categorie;
        $id_plat = $plat->$id_;

        
        if ($onoff == "Yes") {
            include('addplatonsite.php');
            $rowplat++;
        }

        $selectplat++;

    }

    if ($rowplat == 4) {
        echo "</div>";
        $rowplat = 0;
    }

}while($selectplat<$nbrplat);



        





?>