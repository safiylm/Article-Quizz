<style>
  body {
    background-color: #212121;
    color: white;
  }

  code {
    color: #df3079;
  }

  .container {
    font-size: 19px;
    line-height: 30px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin: 30px auto;
    width: 800px;

    .div-question {
      margin: 30px 10px;

      strong {
        line-height: 45px;
        font-size: 21px;
      }
    }
  }
</style>

<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
  <title>
    Interview technique de développeur front-end | Article & Quizz
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="../styles/articles.css" />
  <!-- //for font family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <style>
    #contenu {
      width: 95vw;
    }
  </style>
</head>

<body onload="loadArticle(); ">

  <?php include("../shared/nav.php"); ?>


  <div id="display-article">
  </div>

  <div class="container">
    <h1>Interview technique de développeur front-end</h1>
    <p>
      Pour une interview technique de développeur front-end, il est important de se préparer à des questions couvrant un
      large éventail de sujets, y compris les technologies de base (HTML, CSS, JavaScript), les frameworks et
      bibliothèques modernes (comme React, Angular ou Vue.js), ainsi que les bonnes pratiques et les outils de
      développement. Voici une liste de questions courantes et des réponses pour vous aider à vous préparer :
    </p>

    <h2> 1. HTML</h2>
    <div class="div-question">
      <li> <strong>Qu'est-ce que le HTML et pourquoi est-il important ?</strong>
        <br />
        HTML (HyperText Markup Language) est le langage standard utilisé pour créer des pages web. Il structure le
        contenu
        de la page avec des éléments et des balises, définissant des éléments comme les titres, les paragraphes, les
        liens,
        les images, et autres.
      </li>
    </div>
    <div class="div-question">
      <li> <strong>Quelle est la différence entre les éléments inline et block en HTML ?</strong>
        <br />
        - **Inline** : Les éléments inline n'interrompent pas le flux du texte dans lequel ils sont insérés. Exemples :
        <code> &lt;span&gt;, &lt;a&gt;, &lt;img&gt;.</code>
        - **Block** : Les éléments block occupent toute la largeur disponible et commencent sur une nouvelle ligne.
        Exemples : <code> &lt;div&gt;, &lt;p&gt;, &lt;h1&gt;.</code>
      </li>
    </div>
    <div class="div-question">
      <li> <strong>Qu'est-ce que l'accessibilité web (a11y) et pourquoi est-elle importante ?
        </strong>
        <br />
        L'accessibilité web vise à rendre les sites web utilisables par tous, y compris les personnes ayant des
        handicaps. Cela inclut l'utilisation de balises ARIA, des textes alternatifs pour les images, et une
        navigation clavier accessible.
      </li>
    </div>
    <h2> 2. CSS</h2>

    <div class="div-question">
      <li> <strong>Qu'est-ce que le modèle de boîte CSS (CSS Box Model) ?**
        </strong>
        <br /> Le modèle de boîte CSS est un concept qui décrit la structure de tous les éléments HTML. Il comprend les
        marges (margin), les bordures (border), les espacements internes (padding) et le contenu (content).
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Comment centrer un élément horizontalement et verticalement en CSS ?**
        </strong>
        <br /> <code>
          .container {<br />
          display: flex;<br />
          justify-content: center;<br />
          align-items: center;<br />
          height: 100vh; /* par exemple pour centrer dans toute la fenêtre */
          }
        </code>
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Quelle est la différence entre `position: relative` et `position: absolute` en CSS ?**
        </strong>
        <br /> - Relative : Positionne l'élément par rapport à sa position normale. D'autres éléments ne sont pas
        affectés.<br />
        - Absolute : Positionne l'élément par rapport à l'élément conteneur le plus proche ayant une position
        définie (relative, absolute, fixed ou sticky). L'élément est retiré du flux normal du document.
      </li>
    </div>

    <h2> 3. JavaScript</h2>

    <div class="div-question">
      <li> <strong>Qu'est-ce que le hoisting en JavaScript ?
        </strong>
        <br /> Le hoisting est un comportement de JavaScript où les déclarations de variables et de fonctions sont
        "levées"
        au début de leur contexte (fonction ou global) avant l'exécution du code. Cependant, seules les déclarations
        sont hoistées, pas les initialisations.
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Quelle est la différence entre == et === en JavaScript ?
        </strong>
        <br /> - == : Opérateur d'égalité lâche qui compare les valeurs après conversion de type si nécessaire.
        <br />- === : Opérateur d'égalité stricte qui compare les valeurs et les types, sans conversion de type.
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Expliquez les concepts de closure en JavaScript.
        </strong>
        <br /> Une closure est une fonction qui se souvient de l'environnement lexical dans lequel elle a été créée,
        même
        après que cet environnement ait cessé d'exister. Cela permet à la fonction de continuer à accéder aux
        variables de cet environnement.
        <code> <br />
          function outerFunction(outerVariable) { <br />
          return function innerFunction(innerVariable) { <br />
          console.log('Outer Variable: ' + outerVariable); <br />
          console.log('Inner Variable: ' + innerVariable); <br />
          }; <br />
          } <br />
          <br />
          const newFunction = outerFunction('outside'); <br />
          newFunction('inside'); // Affiche 'Outer Variable: outside' et 'Inner Variable: inside' <br />
        </code>
      </li>
    </div>

    <h2> 4. Frameworks et Bibliothèques</h2>

    <h3>React</h3>

    <div class="div-question">
      <li> <strong>Qu'est-ce que React et pourquoi l'utiliser ?
        </strong>
        <br /> React est une bibliothèque JavaScript pour construire des interfaces utilisateur. Il permet de créer des
        composants réutilisables, offre une approche déclarative pour la création d'UI, et utilise un Virtual DOM
        pour optimiser les mises à jour de l'interface.
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Qu'est-ce qu'un composant à état (stateful) et un composant sans état (stateless) en React ?
        </strong>
        <br />- Stateful : Un composant qui maintient son propre état interne et réagit aux changements de cet état.
        - Stateless : Un composant qui ne maintient pas d'état interne, souvent une fonction pure qui rend l'UI
        basée uniquement sur les props.
      </li>
    </div>

    <h3>Angular</h3>

    <div class="div-question">
      <li> <strong>Comment fonctionne le Data Binding dans Angular ?**
        </strong>
        <br />Angular utilise des liaisons de données bidirectionnelles (two-way data binding), permettant une
        synchronisation automatique entre le modèle et la vue. Cela se fait principalement via les directives
        `ngModel`, `{{}}` pour l'interpolation, `[property]` pour la liaison de propriété, et `(event)` pour la
        liaison d'événement.
        <a href='https://apprendre.bonjour-angular.com/cest-quoi/data-binding/'>En savoir plus </a>
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Qu'est-ce qu'un module dans Angular ?
        </strong>
        <br />Un module en Angular est un conteneur pour un ensemble de composants, services, pipes, et directives liés
        entre eux. Chaque application Angular a au moins un module racine, `AppModule`, qui est utilisé pour lancer
        l'application.
      </li>
    </div>

    <h2> 5. Outils et Bonnes Pratiques</h2>

    <div class="div-question">
      <li> <strong>Qu'est-ce que le transpiling et pourquoi l'utilise-t-on ?</strong>
        <br />
        Le transpiling est le processus de transformation du code source d'un langage à un autre. Dans le contexte
        du développement front-end, il est souvent utilisé pour convertir du code ES6+ (ou TypeScript) en ES5 pour
        assurer la compatibilité avec les navigateurs plus anciens.
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Comment pouvez-vous optimiser les performances d'un site web ?**
        </strong>
        <br />Minification** et **uglification** des fichiers CSS et JavaScript.
        - Utilisation de **CDN** pour le contenu statique.
        - Implémentation de **lazy loading** pour les images et les composants.
        - Utilisation de **caching** pour réduire les temps de chargement.
        - Optimisation des images et utilisation de formats modernes comme **WebP**.
      </li>
    </div>

    <h2>6. Questions avancées</h2>

    <div class="div-question">
      <li> <strong>Qu'est-ce que le Shadow DOM ?</strong>
        <br />
        Le Shadow DOM est une spécification du DOM utilisée pour encapsuler les éléments DOM et leur style,
        empêchant les fuites de styles et les conflits entre les composants.
      </li>
    </div>

    <div class="div-question">
      <li> <strong>Expliquez le fonctionnement de la gestion de l'état dans une application complexe (par exemple, avec
          Redux ou NgRx).</strong>
        <br />
        La gestion de l'état centralise l'état de l'application dans un store unique. Les actions décrivent les
        événements qui peuvent modifier l'état. Les reducers sont des fonctions pures qui spécifient comment l'état
        change en réponse aux actions. Cela permet une gestion prévisible et débogable de l'état de l'application.
      </li>
    </div>

    Préparer ces questions et comprendre les concepts sous-jacents vous aidera à réussir une interview technique
    front-end.

  </div>

  <script src='../js/article.js'>
  </script>
</body>

</html>