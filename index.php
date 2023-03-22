<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
</head>
<body>

    <header>

        <?php
        include("./src/php/header.php");
        ?>
    </header>
   
    <section>

<div class="container mx-auto">


<form action="/src/php/trie.php" method="post">
<div class="input-group d-flex justify-content-end mr-5 ">
    <select name="trie" class="btn btn-primary btn-sm text-light">
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
    <input type="submit" class="btn btn-primary btn-sm text-light rounded"/>
    </div>
</form>



                <!--------- affichage disque ----------->
                <?php include("./src/php/selectdisc.php");
                ?>                
</div>
    </section>

    <!-- Script JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>