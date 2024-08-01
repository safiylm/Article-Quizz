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
        Interview sur React.js | Article & Quizz
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

        <h1>Interview sur React.js</h1>

        <p>Une interview technique sur React.js peut couvrir une large gamme de sujets, allant des bases de React aux
            concepts
            avancés. Voici quelques sujets et exemples de questions qui pourraient être posés lors d'une interview
            technique
            sur
            React.js, ainsi que des conseils pour y répondre efficacement.
        </p>


        <h2>1. Les Bases de React</h2>
        <div class="div-question">
            <li> <strong>Qu'est-ce que React ?</strong></li>

            React est une bibliothèque JavaScript développée par Facebook pour construire des interfaces
            utilisateur.
            Elle permet de créer des composants réutilisables et de gérer l'état de l'application de manière
            efficace.

        </div>

        <div class="div-question">
            <li><strong> What are components in React?
                </strong></li>

            React components are JavaScript functions.
            Components let you split the UI into independent, reusable pieces, and think about each piece in isolation.

        </div>

        <div class="div-question">
            <li><strong> What is the feature of ReactJS?</strong></li>

            React. js offers several features such as a component-based architecture, virtual DOM, JSX, one-way data binding, server-side rendering, and a large community of developers that make it a popular choice for building modern web applications.
        </div>

        <div class="div-question">

            <li><strong> What is the controlled components and uncontrolled components in React?</strong> </li>

            Controlled components are form inputs whose values are controlled by React state. The state variables are updated whenever the value of the input changes, and the value of the input is set explicitly through the value prop.
            The onChange event handler is used to update the state.<br />
            <img src="../assets/reactjs/controlled comp.png" alt="controlled component" width="500px" />
            <br /><br />
            Uncontrolled components are form inputs that manage their own state internally, rather than being controlled by React state.
            You can access the current value of the input using a ref after the form is submitted or whenever needed.<br />
            <img src="../assets/reactjs/uncontrolled comp.png" alt="uncontrolled component" width="500px" />


        </div>


        <div class="div-question">
            <li><strong>Quelle est la différence entre un composant fonctionnel et un composant de classe
                    ?</strong></li>

            Un composant fonctionnel est une fonction JavaScript simple qui accepte des props et retourne
            des
            éléments
            React. Un composant de classe est une classe ES6 qui étend `React.Component` et possède des méthodes
            comme
            `render`,
            ainsi que la gestion de l'état via `this.state`.
            <br />
            <br />
            Class component :
            <ol>
                <li>State Management : this.state, this.setState().
                </li>
                <li>Lifecycle Methods such as when it mounts, updates, or unmounts.
                </li>
                <li>Ref and the DOM : Class components can directly interact with the browser's DOM using refs.
                </li>
                <li>Error Boundaries</li>
            </ol>

            <br />
            Functional components :
            <br />
            <ol>
                <li>Simplicity</li>
                <li>Hooks</li>
                <li>Performance</li>
                <li>Ease of Testing</li>
                <li>Conciseness</li>
            </ol>
            <br />

        </div>
        <h2>2. JSX (JavaScript XML)</h2>
        <div class="div-question">
            <li><strong> Qu'est-ce que JSX ?</strong> </li>

            JSX est une syntaxe qui permet d'écrire du HTML dans des fichiers JavaScript. C'est un sur-ensemble
            de
            JavaScript qui rend la syntaxe d'écriture des composants plus intuitive et proche du HTML.

        </div>
        <div class="div-question">
            <li><strong> Comment intégrer une expression JavaScript dans JSX ?</strong> </li>
            On peut intégrer une expression JavaScript dans JSX en utilisant des accolades `{}`. Par exemple,
            `{2 + 2}` affiche `4`.

        </div>

        <h2>3. État et Props</h2>
        <div class="div-question">
            <li><strong> Quelle est la différence entre l'état et les props ?</strong> </li>
            Les props (propriétés) sont des valeurs passées d'un composant parent à un composant enfant.
            L'état est une structure de données propre à un composant, qui peut changer au fil du temps et influencer le rendu du
            composant.

        </div>

        <table>
            <tr>
                <th>PROPS</th>
                <th>STATE</th>
            </tr>
            <tr>
                <td>The data is passed from one component to another</td>
                <td>The data is passed within the component only</td>
            </tr>
            <tr>
                <td>It is immutable(cannot be modified) </td>
                <td>It is mutable(can be modified)</td>
            </tr>
            <tr>
                <td>Props can be used with state and functionnal components </td>
                <td>The state can be used only with the state components/class component </td>
            </tr>
            <tr>
                <td>Props are read-only </td>
                <td>The state is both read and write</td>
            </tr>
        </table>

        <div class="div-question">
            <li><strong> Comment met-on à jour l'état d'un composant fonctionnel ?</strong> </li>
            On utilise le hook `useState` pour déclarer l'état et la fonction qui permet de le mettre à jour.
            Par
            exemple :
            <code>
                const [count, setCount] = useState(0);
                setCount(count + 1);
            </code>

        </div>
        <h2>4. Hooks</h2>
        <div class="div-question">
            <li><strong> Qu'est-ce qu'un hook dans React ?</strong> </li>
            Les hooks sont des fonctions qui permettent d'utiliser l'état et d'autres fonctionnalités de
            React dans les composants fonctionnels. Les hooks les plus courants sont `useState`, `useEffect`,
            `useContext`, etc.


        </div>

        <div class="div-question">
            <li><strong> Expliquez le hook `useEffect` et donnez un exemple.</strong> </li>
            `useEffect` permet de gérer les effets de bord dans les composants fonctionnels, comme les appels
            API,
            les
            subscriptions, etc. Par exemple :
            <code>
                useEffect(() => {
                document.title = `You clicked ${count} times`;
                }, [count]);
            </code>
            Ici, l'effet est déclenché chaque fois que `count` change.

        </div>


        <h2>5. Gestion de Formulaires</h2>
        <div class="div-question">
            <li><strong> Comment gérez-vous les formulaires dans React ?</strong></li>
            On gère les formulaires en utilisant l'état pour suivre les valeurs des champs de
            formulaire et en
            associant
            des gestionnaires d'événements pour mettre à jour l'état en réponse aux changements de
            l'utilisateur. Par
            exemple :
            <code>
                const [name, setName] = useState('');
                const handleChange = (e) => {
                setName(e.target.value);
                };
            </code>

        </div>
        <h2>6. Routage avec React Router</h2>
        <div class="div-question">
            <li><strong> Qu'est-ce que React Router et comment l'utilisez-vous ?</strong> </li>
            React Router est une bibliothèque pour gérer la navigation dans une application React.
            On l'utilise
            en
            configurant des routes avec des composants `Route` et en utilisant `Link` pour la navigation. Par
            exemple :
            <code>
                <BrowserRouter>
                    <Route path="/home" component={Home} />
                    <Link to="/home">Go to Home</Link>
                </BrowserRouter>
            </code>

        </div>
        <h2>7. Optimisation de la Performance</h2>
        <div class="div-question">
            <li><strong> Comment optimiser la performance d'une application React ?</strong></li>
            On peut optimiser la performance en utilisant des techniques comme le memoization
            (`React.memo`),
            les
            hooks
            `useMemo` et `useCallback`, le code splitting avec `React.lazy` et `Suspense`, et la virtualisation
            des listes
            longues
            avec des bibliothèques comme `react-window`.

        </div>
        <br/>
        <br/>
        
        <h2>Conseils pour l'Interview</h2>
        <ol>
            <li>Pratiquez le Codage** : Utilisez des plateformes comme LeetCode, HackerRank, ou CodeSignal pour
                pratiquer le codage en direct. </li>
            <li>Préparez des Projets** : Ayez quelques projets que vous avez réalisés prêts à être discutés.
                Montrez votre code et expliquez vos choix de conception. </li>
            <li>Révisez les Concepts de Base** : Assurez-vous de bien comprendre les concepts de base de
                JavaScript, car ils sont souvent testés dans des interviews React. </li>
            <li>Expliquez votre Raisonnement** : Pendant l'interview, expliquez votre pensée et vos choix. Cela montre
                votre compréhension et votre capacité à résoudre des problèmes. </li>
            <li>Soyez Prêt pour les Questions Théoriques et Pratiques** : Les interviews techniques peuvent
                inclure des questions théoriques ainsi que des exercices de codage en direct. Soyez préparé pour les
                deux. </li>
        </ol>
        <br/>
        <br/>

        <h2> Best Practices for Modern React Development</h2>
        <ol>
            <li> Prefer Functional Components: Use functional components with hooks for state management and side effects. This approach is more aligned with the future direction of React.</li>
            <li> Composition Over Inheritance: Favor composition over inheritance design patterns. React's compositional nature makes it easy to reuse code and create components that accept children or render props.</li>
            <li> Immutable State: Treat state as immutable. Always use setState or the state setter from the useState hook to update state values.</li>
            <li> Lifting State Up: When multiple components need to share state, consider lifting the state up to their closest common ancestor.</li>
            <li> Controlled Components: Use controlled components for form inputs where the React component controls the input values.</li>
            <li> Fragment and Key Usage: Use React Fragments to group a list of children without adding extra nodes to the DOM. When rendering lists, always provide a unique key prop to each element to help React identify which items have changed.</li>
            <li> Code Splitting and Lazy Loading: Use dynamic import() syntax and React.lazy for code splitting and lazy loading components, which can significantly improve performance.</li>
            <li> Profiler API: Utilize the Profiler API to measure the "cost" of rendering and to identify performance bottlenecks.</li>
            <li> Accessibility: Always remember accessibility and follow the Web Content Accessibility Guidelines (WCAG).</li>
            <li> Stay Updated: Keep up with the latest React features and updates by following the React blog and documentation.</li>
        </ol>
        <br/>

    </div>

    <script src='../js/article.js'>
    </script>
</body>

</html>