<?php

    //verif des imput

    if (isset($_POST['clefinto']) && $_POST['clefinto'] != "") {
        $iddisque = $_POST['clefinto'];
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
    

    if ($title == Null || $artist == Null || $year == Null || $genre == Null || $label == Null || $price == Null ) {
        //header("Location: modaledit.php");
        echo "titre : ". $title ." /:/ artiste ". $artist ." /:/ year ". $year." /:/ genre ". $genre ." /:/ label ". $label ." /:/ prix". $price." /:/ pochette album ". $pochalbum;
        echo "erreur";
        exit;
    }

    //Gestion Image 
    if ($_POST['picture'] != NULL) {

        $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
        finfo_close($finfo);

        if ($_FILES["picture"]["error"]=0) {

            if (in_array($mimetype, $aMimeTypes))
            {
                move_iddisqueuploaded_file($_FILES["picture"]["tmp_name"], "/src/img/".$pochalbum);

        }

            else 
            {
                echo "Type de fichier non autorisé";    
                exit;
            }
        }
    }

    else {
        $picture = $pochalbum;
    }


    //connect
    include("../../../src/php/requestsql/connect.php");
    $db = connexionBase();
    //envoi de la modif
    try {
        $requete = $db->prepare("INSERT INTO disc (disc_id, disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id)
        VALUES (:clefinto, :disc_title, :disc_year, :disc_picture, :disc_label, :disc_genre, :disc_price, :artist_name);");


        $requete->bindValue(":clefinto", $clefinto, PDO::PARAM_INT);
        $requete->bindValue(":artist_name", $artist, PDO::PARAM_STR);
        $requete->bindValue(":disc_price", $price, PDO::PARAM_STR);
        $requete->bindValue(":disc_year", $year, PDO::PARAM_INT);
        $requete->bindValue(":disc_genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":disc_label", $label, PDO::PARAM_STR); 
        $requete->bindValue(":disc_picture", $picture, PDO::PARAM_STR);
        $requete->bindValue(":disc_title", $title, PDO::PARAM_STR);

        $requete->execute();
        $requete->closeCursor();
    }


    // a faire
    catch (Exception $e) {
        echo "titre : ". $title ." /:/ artiste ". $artist ." /:/ year ". $year." /:/ genre ". $genre ." /:/ label ". $label ." /:/ prix". $price." /:/ pochette album = ". $pochalbum . "<br>";
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (Non envoyer)");
    }

    // si valeur envoye redirection vers l'index
    header("Location:/index.php");
    exit;


?>