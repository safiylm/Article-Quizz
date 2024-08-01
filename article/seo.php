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
        <p>
            Indexer son site revient à être visibile sur google.
            Si un site n'est pas indexée peu importe la recherche que je fais je ne la trouverai pas sur google.
            Si tu veux savoir si ton site est indexé sur google: site:url
        </p>
        <p>
            Aller sur google search console.
            ENtrez le nom de domaine.
            Aller dans DNS text editor dans notre hébergeur.
            Ajouter un enregistrement txt damader par google pour etre sur qu'on indexe bien notre site et pas celui des autres.
            Une fois la propriété valider on continue on envoie le sitemap. Le sitemap est le plan de votre site, 
            cette page aide a google de comprendre où est quelle page...
        </p>
        <h2>D'autres méthodes pour accélerer ton indexation</h2>
        <p>
            Maillage interne sur google: une page de ton site renvoie vers une autre page de ton site. 
            Mettre des backlinks : un autre site met un lien vers ton site.
            Utilisation des sites externes.
        </p>
        <a href="https://developer.chrome.com/docs/lighthouse/overview?hl=fr">Test optimisation mobile Google</a>

        <h2>Foudroyer</h2>
        <p>Google a crée une api d'indexation pour ranker ses pages en 4 heures sur google.
            Elle est plus rapide que la search console.
            Imaginez les sites comme monster qui publient des oofres d'emploi, ils auront beaucoup de mals à trouver des candidats.
            Foudroyer.com 
        </p>
        </div>

    <div id="display-quizz"></div>

    <script src='../js/article.js'>
    </script>

    <script src='../js/quizz.js'>
    </script>

</body>

</html>