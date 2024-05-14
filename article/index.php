<!DOCTYPE html>
<html>

<head>
    <title> Article & Quizz  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.scss"/>
    <link rel="stylesheet" href="../styles/quizz.scss"/>
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body onload="loadArticle(); loadQuizz();">

<?php include("../nav/index.php");?>

<div id="display-article"> </div>

<div id="display-quizz"></div>

<script src='../js/article.js'>
</script>

<script src='../js/quizz.js'>
</script>

</body>
</html>