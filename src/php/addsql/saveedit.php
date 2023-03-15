<?php
    //selectione de la ligne

    $requete = $db->prepare("SELECT *
    FROM disc
    join artist 
    on disc.artist_id = artist.artist_id 
    WHERE disc.disc_id=?");
    $requete->execute(array($_POST["iddisque"]));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();

    //verif des imput

    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }

    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $artist = $_POST['artist'];
    }

    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }

    if (isset($_POST['iddisque']) && $_POST['iddisque'] != "") {
        $iddisque = $_POST['iddisque'];
    }

    //si valeur null = envoi echec
    else {
        $title = Null;
        $artist = Null;
        $year = Null;
        $genre = Null;
        $label = Null;
        $price = Null;}

        var_dump($_POST);

    if ($title = Null || $artist = Null || $year = Null || $genre = Null || $label = Null || $price = Null) {
        header("Location: modaledit.php");
        exit;
    }

    //Gestion Image

    $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
    finfo_close($finfo);

    if ($_FILES["fichier"]["error"]=0) {

        if (in_array($mimetype, $aMimeTypes))
        {
            move_uploaded_file($_FILES["picture"]["tmp_name"], "./src/img/".$title.".jpg");

        }

        else 
        {
            echo "Type de fichier non autorisé";    
            exit;
        }
    }

    //envoi de la modif
    try {

        $requete = $db->prepare("UPDATE disc
                                SET disc_price = :disc_price,
                                disc_year = :disc_year,
                                disc_genre = :disc_year,
                                disc_label = :disc_label,
                                disc_picture = :disc_picture,
                                disc_title = :disc_title
                                WHERE disc_id = :disc_id;");


        $requete->bindValue(":disc_id", $iddisque, PDO::PARAM_INT);

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
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (modaledit.php)");
    }

    // Si OK: redirection vers l'index
    header("Location: index.php");
    exit;


?>