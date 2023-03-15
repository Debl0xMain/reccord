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
        tye
        <?php include "./src/php/requestsql/connect.php";
        ?>
        <?php
        include("./src/php/header.php");
        ?>
    </header>
    <!-- affichage disque -->
    <section>
    <div class="container">

                <?php include("./src/php/selectdisc.php");
                
                ?>                
    </div>

<!-- ajoute 

<div class="modal fade" id="add1" tabindex="-1" aria-labelledby="add1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">
        
            <div class="row">
                <div class="col">
                    <p class="mb-0">title</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
                <div class="col">
                    <p class="mb-0">artist</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">Year</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
                <div class="col">
                    <p class="mb-0">Genre</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0">label</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
                <div class="col">
                    <p class="mb-0">price</p>
                    <input size="10" type="text" name="title1" id="tittle1">
                </div>
        
                <div class="row">
                    <div class="col">
                        <p class="mb-0">Picture</p>
                        <input type="file" name="fichier"> 
                    </div>
                </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
    </div>
</div>
</div> -->
    <!-- Script JS -->
    <section>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </section>
</body>
</html>