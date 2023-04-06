<?php
echo '<header class="container">
    <nav class="navbar navbar-expand-sm justify-content-center fixed-top bg-nav">
        <div class="">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-5"><img class="logomin" src="./src/img/logo/logo1.png" alt="logomin"></span>
            </button>
            <div class="collapse navbar-collapse text-center text-align-center" id="n_bar">
                <ul class="navbar-nav">
                    <img class="navlogo" src="./src/img/logo/logo.png" alt="Logo The District">
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./index.php">Accueil</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./categorie.php">Categorie</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link  reveal-top navtext" href="./plats.php">Plats</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./contact.php">Contact</a>
                </li>
                <img class="navlogo" src="./src/img/logo/logo.png" alt="Logo The District">
                </ul>
            </div>
            <div class="position-fixed btnlogin">
                <button type="button" class="btn btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#login">
                    <i class="fa-solid fa-user"></i>
                 Login
                </button>
            </div>
        </div>
    </nav>
</header>

<div class="background"><img class="background" src="./src/img/background/background.jpg" alt=""></div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container">
            <div class="text-center">
                <form action="#" method="POST">
                    <p class="align-self-center">Email</p><i class="fa-solid fa-envelope"></i>
                    <input type="email">
                    <p class="mt-3">Password</p><i class="fa-solid fa-lock"></i>
                    <input type="password">
                </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
'
?>