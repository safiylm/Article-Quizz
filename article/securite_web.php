<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | Javascript Shorthand </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="loadArticle(); loadQuizz();">

    <?php include("../shared/nav.php"); ?>

    <div id="display-article">
    </div>

    <div id="contenu">
        <h2>HTTPS</h2>
        <p>
            Le certificat SSL est important pour crypter les informations communiquées entre le serveur et le navigateur.
       HTTPS verifie si le site possède un certificat d'authentfication (SSL) 
       pour garantir la confidentialité des données qui transitent entre le navigateur et le serveur.
        </p>
        <p>2 étapes pour passer de http à https: installer un certificat SSL dans l'hébergeur, on met en place une préference pour que le site s'affiche par défault en https plutot qu'en http.</p>

        <h2>Les mots de passe fort </h2>
        <p>
        Les mots de passe fort sont plus difficile a être recupérer. 
        Bien évidemment les mots de passe doivent être hachés.
        </p>

        <h2>Les mise à jour régulières </h2>
        <p>
        ....
        </p>
    </div>



    <script src='../js/article.js'>
    </script>

 

</body>

</html>