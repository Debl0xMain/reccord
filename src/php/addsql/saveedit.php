<?php

    //verif des imput

    if (isset($_POST['iddisque']) && $_POST['iddisque'] != "") {
        $iddisque = $_POST['iddisque'];
    }
    else ($iddisque = NULL);

    if (isset($_POST['pochalbum']) && $_POST['pochalbum'] != "") {
        $pochalbum = $_POST['pochalbum'];
    }
    else ($pochalbum = NULL);

    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else ($title = NULL);

    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $artist = $_POST['artist'];
    }
    else ($artist = NULL);

    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else ($year = NULL);

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else ($genre = NULL);

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else ($label = NULL);

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else ($price = NULL);

    //si valeur null = envoi echec

    if ($title == Null || $artist == Null || $year == Null || $genre == Null || $label == Null || $price == Null) {
        //header("Location: modaledit.php");
        echo "erreur variable";
        echo $title." = titre <br>".$artist." = artiste <br>".$year." = date <br>".$genre." = genre <br>".$label." = label <br>".$price." = prix <br>";
        exit;
    }

    //Gestion Image

    $imgupload = $title.".jpeg"; // definition du nom dans la BDD
    include("imgform.php");

    //connect
    include("../../../src/php/requestsql/connect.php");
    $db = connexionBase();
    //envoi de la modif
    try {
        $requete = $db->prepare("UPDATE disc
                                JOIN artist ON disc.artist_id = artist.artist_id
                                SET disc.disc_price = :disc_price,
                                disc.disc_year = :disc_year,
                                disc.disc_genre = :disc_genre,
                                disc.disc_label = :disc_label,
                                disc.disc_picture = :disc_picture,
                                disc.disc_title = :disc_title,
                                artist.artist_name = :artist_name
                                WHERE disc_id = :disc_id");


        $requete->bindValue(":disc_id", $iddisque, PDO::PARAM_INT);
        $requete->bindValue(":artist_name", $artist, PDO::PARAM_STR);
        $requete->bindValue(":disc_price", $price, PDO::PARAM_STR);
        $requete->bindValue(":disc_year", $year, PDO::PARAM_INT);
        $requete->bindValue(":disc_genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":disc_label", $label, PDO::PARAM_STR); 
        $requete->bindValue(":disc_picture", $imgupload, PDO::PARAM_STR); // a renome
        $requete->bindValue(":disc_title", $title, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }


    // a faire
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        var_dump($_POST);
        die("Fin du script (Non envoyer)");
    }

    // si valeur envoye redirection vers l'index
    header("Location:/index.php");
    exit;


?>