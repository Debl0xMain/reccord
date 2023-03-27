<?php

    $db = connexionBase();

    $requete = $db->query("
        SELECT *
        FROM artist
        ORDER BY artist_id DESC
        LIMIT 0,1");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($tableau as $artiste);
    $selectartiste = 0;
    $artistmmax = $artiste->artist_id;

    echo '<select name="artist">';
do {
    $requete = $db->query("
    SELECT *
    FROM artist
    ORDER BY artist_id
    Limit $selectartiste ,1
    ");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    foreach ($tableau as $artiste);

    $id_artist = $artiste->artist_id;
    $name_artist= $artiste->artist_name;;



    echo '<option value="'.$name_artist.'"';
    if ($name_artist == $arstistename ){
        echo ' selected';
    }
    echo '>'.$name_artist.'</option>';

    

    //artiste suivant
    $selectartiste++;


}while($selectartiste<$artistmmax);

    echo '</select>';


?>