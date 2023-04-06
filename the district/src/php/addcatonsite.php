<?php
if ($row == 1) {
    $reveal = "reveal-left";
}
if ($row == 2) {
    $reveal = "reveal-top";
}
if ($row == 3) {
    $reveal = "reveal-right";
}

echo ' <div class="col '.$reveal.' boxsize">
            <div class="boxcat">
                <a class="animcategory" href="#">
                <img class="catbackground" src="/src/img/category/'.$image.'" alt=" '.$libelle.' title="'.$libelle.'">
                <p class="catname mx-auto">'.$libelle.'</p>
                </a>
            </div>
        </div>'


?>