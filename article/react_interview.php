<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | React.js Interview </title>
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
     
    </div>

    <script src='../js/article.js'>
    </script>

</body>

</html>