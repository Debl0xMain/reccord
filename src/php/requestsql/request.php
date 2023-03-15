
<?php

include "connect.php";
$db = connexionBase();
$requete = $db->query("
    SELECT *
    FROM disc
    order by disc_id DESC
    LIMIT 0, 1");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

foreach ($tableau as $disc);
$selectalbum = 0;
$nbralbummax = $disc->disc_id;

do {
    $requete = $db->query("
    SELECT *
    FROM disc
    order by disc_id
    Limit $selectalbum,1
    ");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    foreach ($tableau as $disc);
    foreach ($tableau as $artiste);

    $row = 2;
    $pochalbum = $disc->disc_picture;
    $album = $disc->disc_title;
    $arstistename = $artiste->artist_name;
    $label = $disc->disc_label;
    $Year = $disc->disc_year;
    $Genre = $disc->disc_genre;
    $nbralbum = $disc->disc_id;
    $price = $disc->disc_price;
    
    echo $album." : ".$arstistename;
    //album suivant
        $selectalbum++;

}while($selectalbum<$nbralbummax);


?>