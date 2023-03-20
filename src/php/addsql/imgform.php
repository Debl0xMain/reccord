<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_FILES["picture"]) && $_FILES["picture"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["picture"]["name"];
        $filetype = $_FILES["picture"]["type"];
        $filesize = $_FILES["picture"]["size"];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        if(in_array($filetype, $allowed)){

                move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../src/img/" . $imgupload);
                echo "Votre fichier a été téléchargé avec succès.";
        } 
        else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } 
    else{
        echo "Error: " . $_FILES["picture"]["error"];
    }
}

?>