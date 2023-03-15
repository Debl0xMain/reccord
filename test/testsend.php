<?php
    include("./src/php/requestsql/connect.php");
    $requete = $db->prepare("SELECT *
    FROM disc
    join artist 
    on disc.artist_id = artist.artist_id 
    WHERE disc.disc_id=?");
    $requete->execute(array($_POST["iddisque"]));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();


if (sizeof($_FILES["fichier"]["error"]) > 0) {
    echo "erreur";
};

// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{


move_uploaded_file($_FILES["fichier"]["tmp_name"], "photo.jpg");      
} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}


    // Si OK: redirection vers la page artist_detail.php
    header("Location: ./test.php");
    exit;


?>