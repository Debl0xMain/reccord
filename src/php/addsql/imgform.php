<?php
//                 <div class="col">
//                      <p class="mb-0">Picture</p>
//                          <img src="./src/img/'.$pochalbum.'" alt="'.$album.'" height="255px" width="255px">
//                              <input type="file" name="picture"> 
//                  </div>
//Gestion Image 
if (sizeof($_FILES["picture"]["error"]) > 0) {
    echo "erreur d'img";
    exit;
}
else {
    $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
    finfo_close($finfo);

    if (in_array($mimetype, $aMimeTypes))
    {
        move_uploaded_file($_FILES["picture"]["tmp_name"], "/src/img/".$title.".jpg");

    } 
    else 
    {
    // Le type n'est pas autorisé, donc ERREUR

     echo "Type de fichier non autorisé";    
    exit;
    }    
}


// variable a sortir /!\ $imgupload
?>