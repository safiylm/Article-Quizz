<!DOCTYPE html>
<html>

<?php
session_start();
?>

<head>
    <title> Article & Quizz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <link rel="stylesheet" href="../styles/quizz.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="loadQuizz();">

    <?php

    $path1 = '../data/quizz.json';
    $json_object = file_get_contents($path1);
    $json_quizz = json_decode($json_object, true);
    ?>

    <?php include("../shared/nav.php");
    ?>
    <h1>Quizz : 
    <?php foreach ($json_quizz['listeOfQuizz'] as $q) {
        if ($q['id'] == $_GET['id'])
            echo  $q['title'];
    }
    ?></h1>
    <div id="display-quizz"></div>

    <div id="score"></div>

    <script src='../js/quizz.js'>
    </script>

</body>

</html>