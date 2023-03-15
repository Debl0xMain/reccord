<?php

echo
'<div class="col my-2 order-'.$nbralbum.'">
    <div class="row">
        <div class="col">
            <img class="col" src="./src/img/'."$pochalbum".'" alt="'.$album.'" height="255px">
        </div>
        <div class="col">
            <p class="row my-2">'.$album .'</p>
            <p class="row my-2">'.$arstistename.'</p>
            <p class="row my-2">'.$label .'</p>
            <p class="row my-2">'.$Year.'</p>
            <p class="row my-2">'.$Genre.'</p>
                        
            <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#detail'.$nbralbum.'">Detail</button>
        </div>
    </div>
</div>';

?>