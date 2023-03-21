<?php
$db = connexionBase();

$requete = $db->query("SELECT COUNT(*) AS maxint FROM disc");
$counttable = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

foreach ($counttable as $disc):

$nbralbummax = $disc->maxint;
endforeach;

$requete = $db->query("
    SELECT *
    FROM disc
    order by disc_id DESC
    LIMIT 0, 1");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
foreach ($tableau as $disc):
endforeach;
$selectalbum = 0;
$row = 0;
//trie

include("trie.php");
if (!isset($_SESSION["trie"])) {
    $_SESSION["trie"] = "disc.disc_title";
}
$disquetrie = $_SESSION["trie"];



do {

    if ($row == 0) {
        echo '<div class="row">';
        $row++;
    }

    if ($row == 1 || $row == 2) {
        
        $requete = $db->query("
        SELECT *
        FROM disc
        join artist on disc.artist_id = artist.artist_id
        order by $disquetrie
        Limit $selectalbum,1
        ");
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        foreach ($tableau as $disc);
        foreach ($tableau as $artiste);

        $pochalbum = $disc->disc_picture;
        $album = $disc->disc_title;
        $arstistename = $artiste->artist_name;
        $label = $disc->disc_label;
        $Year = $disc->disc_year;
        $Genre = $disc->disc_genre;
        $nbralbum = $disc->disc_id;
        $price = $disc->disc_price;

        include("./src/php/modal/disque.php");

        include("./src/php/modal/modal.php");
        
        include("./src/php/modal/modaledit.php");

        $selectalbum++;

        $row++;
    }

    if ($row == 3) {
        echo "</div>";
        $row = 0;
    }

}while($selectalbum<$nbralbummax);


if ($nbralbummax%2 == 1) {

    if ($selectalbum === $nbralbummax){
        echo '<div class="col">'.'</div>';
    }
}

?>

<hr>
<?= $disquetrie ?>
<hr>