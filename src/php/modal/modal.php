<?php

echo ' <div class="modal fade" id="detail'.$nbralbum.'" tabindex="-1" aria-labelledby="detail1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body container">
        <div class="row">
            <div class="col">
                <p class="mb-0">title</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$album.'" disabled>
            </div>
            <div class="col">
                <p class="mb-0">artist</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$arstistename.'" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mb-0">Year</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$Year.'" disabled>
            </div>
            <div class="col">
                <p class="mb-0">Genre</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$Genre.'" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mb-0">label</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$label.'" disabled> 
            </div>
            <div class="col">
                <p class="mb-0">Price</p>
                <input size="10" type="text" name="title1" id="tittle1" value="'.$price.'" disabled>
            </div>
    
            <div class="row">
                <div class="col">
                    <p class="mb-0">Picture</p>
                    <img src="./src/img/'.$pochalbum.'" alt="" height="255px" width="255px">
                </div>
            </div>

    </div>

    <div class="modal-footer">


    <input type="text" name="iddisque" value="'.$nbralbum.'">
    

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modif'.$nbralbum.'">
    Edit
        </button>
    </div>
</div>
</div>
</div>
</div>';

?>