<?php

echo '
<div class="modal fade" id="add1" tabindex="-1" aria-labelledby="add1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">
        <form action ="../../../src/php/addsql/saveadd.php" method="post" enctype="multipart/form-data">
        
        <div class="row">
        <div class="col">
            <p class="mb-0">title</p>
            <input size="10" type="text" name="title" id="tittle1">
        </div>
        <div class="col">
            <p class="mb-0">artist</p>
            ';
            include("./src/php/modal/selectartistadd.php");
            echo '
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="mb-0">Year</p>
            <input size="10" type="text" name="year" id="tittle1">
        </div>
        <div class="col">
            <p class="mb-0">Genre</p>
            <input size="10" type="text" name="genre" id="tittle1">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="mb-0">label</p>
            <input size="10" type="text" name="label" id="tittle1">
        </div>
        <div class="col">
            <p class="mb-0">price</p>
            <input size="10" type="text" name="price" id="tittle1">
        </div>
        <div class="row">
            <div class="col">
                <input type="file" name="picture">
            </div>
        </div>
                <input type="hidden" name="idadd" value="'.$idadd.'">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
    </div>
</div>
</div>';
?>