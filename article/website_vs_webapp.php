<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | Website vs web application </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="loadArticle();">

    <?php include("../shared/nav.php"); ?>

    <div id="display-article">
    </div>

    <div id="contenu">
        <h2>Website </h2>
        <p>
            It has static content, with the main focus of infomring the user about the business vision/products/benefits.
        </p>
        <p>
            Only Read Mode, the user is unable to manipulate the information.
        </p>
        <p>
            The Website does not need to be pre-compiled before deployment.
        </p>
        <p>
            The website's function and purpose are quite simple.
        </p>
        <p>The website doesn't require user authentification. </p>
    </div>

    <div id="contenu">
        <h2>Web application </h2>
        <p>
            It has dynamic content, designed specifically for interaction with the end-users
        </p>
        <p>
            Read and Write Mode, the user is able to read and manipulate the information.
        </p>
        <p>
            The web app should be pre-compiled before the deployment.
        </p>
        <p>
            The web application's function and purpose are rather complex.
        </p>
        <p>Most web applications require user authentification. </p>
    </div>

    <script src='../js/article.js'>
    </script>

</body>

</html>