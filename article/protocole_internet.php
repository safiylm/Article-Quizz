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

<body onload="loadArticle(); loadQuizz();">

    <?php include("../nav/index.php"); ?>

    <div id="display-article">
    </div>

    <div id="contenu">

        <h2>HTTP</h2>
        <p>HTTP signifie « Hypertext Transfer Protocol ».Ce protocole avec d’autres concepts qui ont servi de base à la création du World Wide Web : le HTML et l’URI. Alors que le HTML (Hypertext Markup Language) définit comment un site Internet est construit, le HTTP détermine comment la page est transmise du serveur au client. Le troisième concept, l’URL (Uniform Resource Locator), fixe la façon dont une ressource (par exemple un site Internet) doit être adressée sur le Web.</p>
        HTTP vous établie une communication entre votre navigateur et le serveur Web.
        Pour les communications entre un client HTTP et un serveur Web, le port 80 est utilisé.
        Pour information, le protocole HTTPS utilise un numéro de port différent puisqu'il s'appuie sur le port 443.
        <a href='https://www.it-connect.fr/le-protocole-http-pour-les-debutants/?utm_content=cmp-true'>http </a>
        <a href='https://www.ionos.fr/digitalguide/hebergement/aspects-techniques/definition-protocole-http/'>http </a>
        <h2>HTTPS</h2>
        <p>Le HTTPS remplit deux fonctions :</p>
        <p>La communication entre le client Web et le serveur Web est <strong>chiffrée</strong>. Ceci afin d’empêcher qu’un tiers non autorisé « écoute » la communication en prenant par exemple connaissance du trafic en réseau WLAN.</p>
        <p>Le serveur Web est <strong>authentifié</strong> par le fait qu’en tout début de communication, un certificat est envoyé au client Web pour attester de la crédibilité du domaine. Cette mesure contribue à combattre les tromperies résultant de faux sites Web.</p>
        <a href='https://www.ionos.fr/digitalguide/hebergement/aspects-techniques/le-https-cest-quoi/'>https</a>
        <h2>TCP</h2>
        <p>Le protocole TCP (Transmission Control Protocol) est une norme de communication qui permet aux programmes applicatifs et aux dispositifs informatiques d’échanger des messages sur un réseau. Il est conçu pour envoyer des paquets sur Internet et assurer la transmission réussie des données et des messages sur les réseaux. Il veille à la transmission des données de bout en bout.</p>
        <p>Le protocole TCP organise les données afin qu’elles puissent être transmises entre un serveur et un client. Il garantit l’intégrité des données communiquées sur un réseau. Avant de transmettre des données, le TCP établit une connexion entre une source et sa destination, ce qui garantit qu’elle reste active jusqu’au début de la communication. Il divise ensuite de grandes quantités de données en petits paquets, tout en veillant à l’intégrité des données tout au long du processus.</p>
        <h2>Qu’est-ce qu’un protocole IP ?</h2>
        <p>Le protocole IP est la méthode utilisée pour envoyer des données d’un appareil à un autre via Internet. Chaque appareil dispose d’une adresse IP qui l’identifie de manière unique et lui permet de communiquer et d’échanger des données avec d’autres appareils connectés à Internet. Aujourd’hui, elle est considérée comme la norme pour une communication rapide et sécurisée directement entre les appareils mobiles.</p>
        <p>TCP et IP sont des protocoles distincts qui permettent ensemble de garantir la transmission effective des données à leur destination prévue au sein d’un réseau. Le protocole IP obtient et définit l’adresse, notamment l’adresse IP, de l’application ou du périphérique auquel les données doivent être envoyées. Le protocole TCP est ensuite chargé du transport et du routage des données à travers l’architecture réseau et de s’assurer qu’elles sont livrées à l’application ou au dispositif de destination que l’IP a défini. Les deux technologies fonctionnant ensemble permettent la communication entre les dispositifs sur de longues distances, ce qui permet de transférer les données là où elles doivent aller de la manière la plus efficace possible.</p>
        <h2>TCP/IP</h2>
        Le modèle TCP/IP est la méthode par défaut de communication des données sur Internet. Il a été développé par le Department of Defense États-Unis pour permettre une transmission précise et correcte des données entre les appareils. Il divise les messages en paquets pour éviter d’avoir à renvoyer l’intégralité du message en cas de problème lors de la transmission. Les paquets sont automatiquement réassemblés une fois qu’ils atteignent leur destination. Chaque paquet peut emprunter un itinéraire différent entre l’ordinateur source et l’ordinateur de destination, selon que l'itinéraire initial utilisé est saturé ou indisponible.
        <h2>POP3</h2>
        <p>Le Post Office Protocol 3 (POP3 en abrégé) est une méthode de réception d'emails.POP3 est un protocole de transmission qui permet à un client de courrier électronique de récupérer le courrier électronique à partir d'un serveur.</p>
        <h2>FTP</h2>
        <p>FTP est l’abréviation de File Transfer Protocol. Ce protocole de communication est utilisé pour l’échange de fichiers entre un serveur et un client. FTP est utile pour transférer des fichiers entre ordinateurs, que ce soit à distance ou au sein d’un réseau local – votre ordinateur personnel peut même faire office de serveur FTP. </p>
        <h2>STMP</h2>
        <p>SMTP est l'abréviation de Simple Mail Transfer Protocol. Il s'agit d'un protocole de communication utilisé pour envoyer et recevoir des messages électroniques sur Internet. Les serveurs de messagerie et autres agents de transfert de messages (MTA) utilisent le protocole SMTP pour envoyer, recevoir et relayer des messages électroniques.</p>"




    </div>

    <div id="display-quizz"></div>

    <script src='../js/article.js'>
    </script>

    <script src='../js/quizz.js'>
    </script>


</body>

</html>
