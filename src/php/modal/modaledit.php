<?php

echo '<div class="modal fade" id="modif'. $nbralbum.'" tabindex="-1" aria-labelledby="modif'.$nbralbum.'" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modifs '.$nbralbummodif.'</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body container">
    <form action ="../../../src/php/addsql/saveedit.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <p class="mb-0">title</p>
                <input size="10" type="text" name="title" id="tittle1" value="'.$album.'">
            </div>
            <div class="col">
                <p class="mb-0">artist</p>
                ';
                include("./src/php/modal/selectartist.php");
                echo '
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mb-0">Year</p>
                <input size="10" type="text" name="year" id="tittle1" value="'.$Year.'">
            </div>
            <div class="col">
                <p class="mb-0">Genre</p>
                <input size="10" type="text" name="genre" id="tittle1" value="'.$Genre.'">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mb-0">label</p>
                <input size="10" type="text" name="label" id="tittle1" value="'.$label.'">
            </div>
            <div class="col">
                <p class="mb-0">price</p>
                <input size="10" type="text" name="price" id="tittle1" value="'.$price.'">
            </div>
    
            <div class="row">
                <div class="col">
                    <p class="mb-0">Picture</p>
                    <img src="./src/img/'.$pochalbum.'" alt="'.$album.'" height="255px" width="255px">
                    <input type="file" name="picture"> 
                </div>
            </div>
        <input type="hidden" name="iddisque" value="'.$nbralbum.'">
        <input type="hidden" value="'.$pochalbum.'"name="pochalbum">
    </div>
    <div class="modal-footer">'.
    "
    ".'
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" name="Save" class="btn btn-primary" value="Save" data-target="#testphp">Save</button>
    </form>
    <button type="submit" name="Delete" class="btn btn-danger" value="Delete">Delete</button>
    </div>
</div>
</div>
</div>
</div>';


?>
