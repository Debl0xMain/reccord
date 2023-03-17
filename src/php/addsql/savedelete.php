<?php

    //verif des imput

    if (isset($_POST['iddisque']) && $_POST['iddisque'] != "") {
        $iddisque = $_POST['iddisque'];
    }



    //connect
    include("../../../src/php/requestsql/connect.php");
    $db = connexionBase();
    //envoi de la modif
    try {
        $requete = $db->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
        $requete->bindValue(":disc_id", $iddisque, PDO::PARAM_INT);
        $requete->execute();
        $requete->closeCursor();
    }


    // a faire
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        echo $_POST['iddisque'] . "//////";
        die("Fin du script (Non envoyer)");
    }

    // si valeur envoye redirection vers l'index
    TrtRedirection:
    header("Location:/index.php");
    exit;


?>