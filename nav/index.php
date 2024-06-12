<php session_start();?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"> Article & Quizz </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>

        <?php if (!empty($_SESSION['user']['email'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="../mon-compte/index.php">Mon compte</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../auth/deconnexion/index.php">Deconnexion</a>
            </li>

          <?php  } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="../auth/index.php">Connexion</a>
            </li>
          <?php   } ?>

      </ul>
    </div>
  </div>
</nav>
