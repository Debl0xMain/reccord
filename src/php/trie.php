<?php
//session_destroy();
session_start();
//var_dump($_POST);


        if ($_POST['trie'] == "triebase"){
            $_SESSION["trie"] = "disc.disc_id";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "album_az"){
            $_SESSION["trie"] = "disc.disc_title ASC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "album_za"){
            $_SESSION["trie"] = "disc.disc_title DESC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "artist_az"){
            $_SESSION["trie"] = "artist.artist_name ASC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "artist_za"){
            $_SESSION["trie"] = "artist.artist_name DESC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "label_trie"){
            $_SESSION["trie"] = "disc.disc_label";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "genre_trie"){
            $_SESSION["trie"] = "disc.disc_genre ASC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "prix_asc"){
            $_SESSION["trie"] = "disc.disc_price ASC";
            header("Location:/index.php");
        }

        if ($_POST['trie'] == "prix_desc"){
            $_SESSION["trie"] = "disc.disc_price DESC";
            header("Location:/index.php");
        }

?>