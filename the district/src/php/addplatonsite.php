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
                <img class="catbackground" src="/src/img/category/'.$imageplat.'" alt=" '.$libelleplat.' title="'.$libelleplat.'">
                <p class="catname mx-auto">'.$libelleplat.'</p>
                <p class="catname mx-auto">'.$descplat.'</p>
                <p class="catname mx-auto">'.$prixplat.'</p>
                </a>
            </div>
        </div>'


?>