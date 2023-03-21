<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>

        <?php
        include("./src/php/header.php");
        ?>
        
        <form action="/src/php/trie.php" method='POST'>
            <select name="trie" id="trie" class="form-select">
                <option value="triebase" selected hidden>Tri par</option>
                <option value="artist_az">Artiste A - Z</option>
                <option value="artist_za">Artiste Z - A</option>
                <option value="album_az">Album A - Z</option>
                <option value="album_za">Album Z - A</option>
                <option value="genre_trie">Genre</option>
                <option value="label_trie">Label</option>
                <option value="prix_asc">Prix croissant</option>
                <option value="prix_desc">Prix décroissant</option>
            </select>
            <input type="submit" class="btn btn-secondary btn-sm" />
        </form>

    </header>
    <!-- affichage disque -->
    <section>
    <div class="container">

                <?php include("./src/php/selectdisc.php");
                ?>                
    </div>

    <!-- Script JS -->
    <section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </section>
</body>
</html>