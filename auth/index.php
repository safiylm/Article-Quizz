<!DOCTYPE html>

<head>
    <title> Authentification </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="auth.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <?php include("../nav/index.php");?>
    <div class="auth-container d-flex align-items-center justify-content-center">

        <img src="https://productive.fish/learning-style-quiz/illustration/learning-style-quiz-md@2x.avif" alt='learning quizz' />
        <div class="div-voisin-image d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center">
                <button id="btn-connexion" class="auth-active">Connexion</button>
                <button id="btn-inscription">Inscription</button>
            </div>

            <form id="form-inscription" action="post-inscription.php" method="post">
                <h1>Inscription</h1>
                <input type="text" class="form-control" name="nom" placeholder="nom" autocomplete="off" />
                <span id='info-nom'></span>

                <input type="text" class="form-control" name="prenom" placeholder="prenom" autocomplete="off" />
                <span id='info-prenom'></span>

                <input type="email" class="form-control" name="email" placeholder="email" required autocomplete="off" />
                <span id='info-email'></span>

                <div class="d-flex align-items-center justify-content-center">
                    <input id="input-password" type="password" class="form-control" name="password" autocomplete="off" oninput='checkpassword(value)' placeholder="password" required>

                    <button id="btn-eyes-password" onclick="toggleseepwd('password') " type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg>
                    </button>
                </div>
                <span id='info-password'></span>


                <button class="btn btn-primary" type="submit">S'inscrire </button>

            </form>

            <form id="form-connexion" action="post-connexion.php" method="post">
                <h1>Connexion</h1>
                <input type="text" class="form-control" name="email" placeholder="email" autocomplete="off" required />

                <div class="d-flex align-items-center justify-content-center">
                    <input id="input-password" type="password" class="form-control" name="password" autocomplete="off" oninput='checkpassword(value)' placeholder="password" required>
                    <button id="btn-eyes-password" onclick="toggleseepwd('password') " type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg>
                    </button>
                </div>

                <?php
                if ($_GET['pwdinvalid'] == "true") {
                    echo " <p>Mot de passe invalide! Réessayer! </p>";
                }
                if ($_GET['emailinvalid'] == "true") {
                    echo " <p> Email invalide et/ou mot de passe invalide! Réessayer! </p>";
                }
                ?>
                <button class="btn btn-primary" type="submit">Se connecter </button>

                <a href="motdepasse-oublie/enter-email.php">Mot de passe oublié ?</a>
            </form>
        </div>


    </div>



    <script>
        $(document).ready(function() {
            $("#form-inscription").hide();
            $("#btn-connexion").css("background-color", "#d2d2d2");

            $("#btn-connexion").click(function() {
                $("#form-connexion").show();
                $("#btn-connexion").css("background-color", "#d2d2d2");

                $("#form-inscription").hide();
                $("#btn-inscription").removeClass(".auth-active");
                $("#btn-inscription").css("background-color", "whitesmoke");

            });

            $("#btn-inscription").click(function() {
                $("#form-connexion").hide();
                $("#btn-connexion").removeClass(".auth-active");
                $("#btn-connexion").css("background-color", "whitesmoke");


                $("#form-inscription").show();
                $("#btn-inscription").addClass(".auth-active");
                $("#btn-inscription").css("background-color", "#d2d2d2");


            });
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src='../structure-commune/password.js'>
    </script>
</body>

</html>