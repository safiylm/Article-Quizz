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
<html lang="fr">
<?php
session_start();
?>

<head>
  <title>
    Interview Angular | Article & Quizz
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
    <h1>Interview Angular</h1>

    <p>
      Pour une interview technique sur Angular, il est important de se préparer à des questions couvrant divers aspects
      du
      framework, de la compréhension des concepts de base aux questions avancées sur les performances et l'architecture.
      Voici quelques catégories de questions courantes et des exemples pour chacune :
    </p>

    <h2>1. Concepts de base</h2>

    <div class="div-question">
      <li><strong> Qu'est-ce qu'Angular et quels sont ses principaux avantages ?**
        </strong>
        <br /> Angular est un framework de développement web open-source, maintenu par Google, utilisé pour créer des
        applications
        web dynamiques et modernes. Ses principaux avantages incluent l'utilisation de TypeScript, un support intégré
        pour
        les tests unitaires, une architecture basée sur les composants, et des outils puissants pour le routage, la
        gestion
        de l'état, et l'injection de dépendances.
      </li>
    </div>
    <div class="div-question">
      <li><strong> Qu'est-ce qu'un composant dans Angular ?
        </strong>
        <br /> Un composant est une brique de base de l'application Angular. Chaque composant comprend une classe
        TypeScript pour
        la logique, un template HTML pour la vue, et des styles CSS. Les composants peuvent être imbriqués et réutilisés
        dans toute l'application.
      </li>
    </div>

    <div class="div-question">
      <li><strong> Pouvez-vous expliquer la différence entre les modules, les composants et les services dans Angular
          ?
        </strong>
        <br /> - Modules : Regroupent des composants, des directives, des pipes et des services liés entre eux. Ils
        facilitent
        la gestion et l'organisation du code. `AppModule` est le module racine de toute application Angular.<br />
        - Composants : Unités de l'interface utilisateur, chaque composant a un template, une logique et des styles
        associés.<br />
        - Services : Classes utilisées pour encapsuler la logique de l'application telle que les appels API, la gestion
        des données et les fonctionnalités de l'application qui peuvent être partagées entre les composants.
      </li>
    </div>

    <h2> 2. Routage et Navigation</h2>

    <div class="div-question">
      <li><strong> Comment fonctionne le routage dans Angular ?**
        </strong>
        <br /> Le routage dans Angular permet de naviguer entre différentes vues ou pages de l'application. Il est géré
        par le
        module `RouterModule`. Les routes sont définies dans un tableau de configuration et associées à des composants
        spécifiques. Le service `Router` est utilisé pour la navigation programmatique.
      </li>
    </div>

    <div class="div-question">
      <li><strong> Comment configurer les routes et les sous-routes dans Angular ?
        </strong>
        <br />
        <code>
          const routes: Routes = [<br />
          { path: '', component: HomeComponent },<br />
          { path: 'about', component: AboutComponent },<br />
          { path: 'products', component: ProductsComponent,<br />
          children: [<br />
          { path: 'details/:id', component: ProductDetailsComponent }<br />
          ]<br />
          }<br />
          ];<br />
        </code>
      </li>
    </div>

    <h2> 3. Services et Injection de dépendances</h2>

    <div class="div-question">
      <li><strong> Qu'est-ce que l'injection de dépendances dans Angular ?
        </strong>
        <br />L'injection de dépendances (DI) est un modèle de conception utilisé pour implémenter l'inversion de
        contrôle (IoC).
        Dans Angular, DI est utilisé pour fournir des instances de services et d'autres objets nécessaires aux
        composants,
        directives, et autres classes.
      </li>
    </div>

    <div class="div-question">
      <li><strong> Comment créer et utiliser un service dans Angular ?
        </strong>
        <br /> <code>
          // Création du service<br />
          @Injectable({<br />
          providedIn: 'root'<br />
          })<br /><br />

          export class DataService {<br />
          constructor(private http: HttpClient) {}<br />
          <br />
          getData() {<br />
          return this.http.get('api/data');<br />
          }<br />
          }<br /><br />

          // Utilisation du service dans un composant<br />
          @Component({<br />
          selector: 'app-example',<br />
          templateUrl: './example.component.html'<br />
          })<br /><br />
          export class ExampleComponent implements OnInit {<br />
          constructor(private dataService: DataService) {}<br />

          ngOnInit() {<br />
          this.dataService.getData().subscribe(data => {<br />
          console.log(data);<br />
          });<br />
          }<br />
          }
        </code>
      </li>
    </div>

    <h2> 4. Formulaires</h2>


    <div class="div-question">
      <li><strong> Quelle est la différence entre les formulaires réactifs et les formulaires basés sur des modèles dans
          Angular
          ?
        </strong>
        <br />
        - Formulaires réactifs : Utilisent une approche basée sur le code pour créer et gérer des formulaires. Ils
        sont plus puissants pour la validation complexe et la gestion de l'état.
        - Formulaires basés sur des modèles** : Utilisent des directives Angular dans les templates HTML. Ils sont
        plus simples à configurer mais moins flexibles que les formulaires réactifs.
      </li>
    </div>

    <div class="div-question">
      <li><strong> Comment implémenter un formulaire réactif ?</strong>
        <br />
        <code>
          @Component({<br />
          selector: 'app-reactive-form',<br />
          templateUrl: './reactive-form.component.html'<br />
          })<br /><br />
          export class ReactiveFormComponent implements OnInit {<br /><br />

          form: FormGroup;<br />
          constructor(private fb: FormBuilder) {}<br /><br />

          ngOnInit() {<br />
          this.form = this.fb.group({<br />
          name: ['', Validators.required],<br />
          email: ['', [Validators.required, Validators.email]]<br />
          });<br />
          }<br />

          onSubmit() {<br />
          if (this.form.valid) {<br />
          console.log(this.form.value);<br />
          }<br />
          }<br />
          }
        </code>
      </li>
    </div>

    <h2> 5. Performance et optimisation</h2>

    <div class="div-question">
      <li><strong> Quelles sont les meilleures pratiques pour optimiser les performances d'une application Angular ?
        </strong>
        <br />
        - Utiliser le lazy loading pour les modules. <br />
        - Minimiser le nombre de watchers dans les templates. <br />
        - Utiliser des techniques de changement de détection efficaces comme `OnPush`. <br />
        - Optimiser les tailles des bundles en utilisant des outils comme Webpack et Angular CLI. <br />
        - AOT (Ahead-of-Time) compilation pour réduire le temps de chargement de l'application. <br />
      </li>
    </div>

    <div class="div-question">
      <li><strong> Comment fonctionne le changement de détection dans Angular ?
        </strong>
        <br />
        Le changement de détection dans Angular est le processus par lequel Angular vérifie et met à jour l'interface
        utilisateur en réponse aux modifications des données du modèle. Il existe deux stratégies principales :
        `Default` et
        `OnPush`. La stratégie `Default` vérifie les modifications à chaque cycle de détection, tandis que `OnPush` ne
        vérifie que lorsque les entrées du composant changent ou lorsqu'un événement DOM se produit dans le composant.
      </li>
    </div>

    <h2> 6. Questions avancées</h2>

    <div class="div-question">
      <li><strong> Qu'est-ce que NgRx et pourquoi l'utiliser ?
        </strong>
        <br />
        NgRx est une bibliothèque de gestion d'état pour Angular inspirée de Redux. Il permet de gérer l'état de
        l'application de manière prévisible et de centraliser la logique de l'application. NgRx est utile pour les
        applications complexes où la gestion de l'état devient difficile à maintenir.
      </li>
    </div>

    <div class="div-question">
      <li><strong> Comment gérer les erreurs globales dans une application Angular ?
        </strong>
        <br />
        Vous pouvez utiliser un `ErrorHandler` personnalisé pour intercepter et gérer les erreurs globales dans une
        application Angular.
        <code>
        @Injectable()<br />
        export class GlobalErrorHandler implements ErrorHandler {<br />
        handleError(error: any): void {<br />
        // Logique de gestion des erreurs, comme l'envoi à un service de journalisation<br />
        console.error('An error occurred:', error);<br />
        }<br />
        }<br />
        <br />
        @NgModule({<br />
        providers: [{ provide: ErrorHandler, useClass: GlobalErrorHandler }]<br />
        })<br />
        export class AppModule {}<br />
        </code>
        
        </li>
        </div>

        Préparer ces questions et comprendre les concepts sous-jacents vous aidera à réussir une interview technique sur
        Angular.

    

  </div>
  
  <script src='../js/article.js'>
    </script>
</body>

</html>