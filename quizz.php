<!DOCTYPE html>
<html>

<head>
    <title> Article & Quizz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/articlesListe.css" />
    <link href="styles/menu-verticale.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    session_start();
    include('shared/article-card.php');
    include('shared/quizz-card.php');
    // Read the JSON file  
    $json = file_get_contents('data/articles.json');
    $json1 = file_get_contents('data/quizz.json');
    // Decode the JSON file 
    $json_articles = json_decode($json, true);
    $json_quizz = json_decode($json1, true);
    ?>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> Article & Quizz </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Articles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="quizz.php">Quizz</a>
                    </li>


                    <?php if (!empty($_SESSION['user']['email'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/mon-compte/index.php">Mon compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/auth/deconnexion/index.php">Deconnexion</a>
                        </li>

                    <?php  } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/auth/index.php">Connexion</a>
                        </li>
                    <?php   } ?>

                </ul>
            </div>
        </div>
    </nav>


    <div id="div-container-quizz">

        <h1>Quizz</h1>

        <div id="liste-of-articles" class="d-flex flex-wrap align-items-center justify-content-center">
            <?php
            foreach ($json_quizz["listeOfQuizz"] as $elment) {
                quizz_card($elment);
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>