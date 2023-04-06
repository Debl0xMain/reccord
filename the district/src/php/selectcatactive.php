<?php
include('./src/sql/connect.php');
$db = connexionBase();

$requete = $db->query("SELECT COUNT(*) AS maxint FROM categorie");
$counttable = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

foreach ($counttable as $categorie):

$nbrcategorie = $categorie->maxint;
endforeach;
$requete = $db->query("
    SELECT *
    FROM categorie
    order by id DESC
    LIMIT 0, 1");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
foreach ($tableau as $affcat):
endforeach;
$selectcategorie = 0;
$row = 0;
$revealcount = 0;

do {

    if ($row == 0) {
        echo '<div class="row my-2 mx-5 text-center row-cols-3">';
        $row++;
    }

    if ($row == 1 || $row == 2 || $row == 3) {
        
        $requete = $db->query("
        SELECT *
        FROM categorie
        Limit $selectcategorie,1
        ");
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        foreach ($tableau as $cat);

        $libelle = $cat->libelle;
        $image = $cat->image;
        $onoff = $cat->active;
        $id_categorie = $cat->id;

        
        if ($onoff == "Yes") {
            include('addcatonsite.php');
            $row++;
        }

        $selectcategorie++;

    }

    if ($row == 4) {
        echo "</div>";
        $row = 0;
    }

}while($selectcategorie<$nbrcategorie);



        





?>