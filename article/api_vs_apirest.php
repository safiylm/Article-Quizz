<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | API vs API REST </title>
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

    L’interface de programmation d’application est un moyen de communication entre un utilisateur et un fournisseur. Elle permet de faire dialoguer différents logiciels et applications grâce à un système de transmission de requêtes et de réponses. 

    API est un sigle signifiant « Application Programming Interface », qui se traduit par « interface de programmation d’application ». Il s’agit d’une interface informatique visant à connecter un logiciel ou une application à d’autres systèmes distincts afin qu’ils puissent échanger leurs fonctionnalités, leurs services, leurs technologies et leurs données. L’API se matérialise comme une passerelle d’accès à une fonctionnalité détenue par une entité indépendante.

Grâce à un langage de programmation universel, elle favorise l’interaction entre utilisateurs et fournisseurs par l’envoi de requêtes d’accès aux services du fournisseur. Elle facilite la création et l’intégration de fonctionnalités afin que les développeurs n’aient pas besoin de maîtriser complètement le programme qu’ils souhaitent exploiter.

    

    REST - Representational State Transfer.

API - Application Programming Interface

Most, if not all, large popular websites will rely upon some form of REST API in order to deliver some content or functionality to their users. Some sites like Facebook and Twitter actually expose some of these APIs to outside developers to build their own tools and systems.

We can communicate with REST APIs using HTTP requests, much like you’d do to navigate to a website or load an image. We can do HTTP requests to certain API urls and these urls would then return the information we required, or we could push data to an API url in order to change some data in a database.

Typically we send HTTP requests to an URL that we have defined in our REST API and it would either perform a given task for us or return a certain bit of data. Most APIs these days would return a response to us in the form of JSON.
    <img src="https://images.tutorialedge.net/uploads/rest-api.png" width="600px" height="auto" />
    </div>

    <script src='../js/article.js'>
    </script>

</body>

</html>