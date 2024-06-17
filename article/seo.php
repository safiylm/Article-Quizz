<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | Javascript Shorthand </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <link rel="stylesheet" href="../styles/quizz.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="loadArticle(); loadQuizz();">

    <?php include("../shared/nav.php"); ?>

    <div id="display-article">
    </div>

    <div id="contenu">
        <h2>Definition</h2>
        <p>
            Le<strong> SEO (Search Engine Optimization), ou référencement naturel</strong>, consiste à aider les moteurs de recherche à interpréter votre contenu, et à aider les internautes à trouver votre site et à décider s'ils doivent y accéder ou non via un moteur de recherche.
        </p>
    </div>

    <div id="display-quizz"></div>

    <script src='../js/article.js'>
    </script>

    <script src='../js/quizz.js'>
    </script>

</body>

</html>