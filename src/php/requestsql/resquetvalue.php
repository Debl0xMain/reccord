<?php

$requete->bindValue(":artist_name", $artist, PDO::PARAM_INT);
$requete->bindValue(":disc_price", $price, PDO::PARAM_INT);
$requete->bindValue(":disc_year", $year, PDO::PARAM_INT);
$requete->bindValue(":disc_genre", $genre, PDO::PARAM_INT);
$requete->bindValue(":disc_label", $label, PDO::PARAM_INT);
$requete->bindValue(":disc_picture", $picture, PDO::PARAM_INT);
$requete->bindValue(":disc_title", $title, PDO::PARAM_INT);

?>