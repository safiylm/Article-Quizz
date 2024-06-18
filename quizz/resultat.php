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

<body onload="loadResultatQuizz();">

    <?php

    $path1 = '../data/quizz.json';
    $json_object = file_get_contents($path1);
    $json_quizz = json_decode($json_object, true);

    $json1 = file_get_contents('../data/user.json');
    $json_user = json_decode($json1, true);

    $quizzresultat = "";
    foreach ($json_user['quizscore'] as $res) {
        if ($res['id'] == $_GET['idres'])
            $quizzresultat = $res;
    }

    ?>

    <?php include("../shared/nav.php");

    ?>
    <h1>Résultat du quizz :
        <?php foreach ($json_quizz['listeOfQuizz'] as $q) {
            if ($q['id'] == $quizzresultat['quizId'])
                echo  $q['title'];
        }
        ?></h1>
    <div id="display-quizz"></div>

    <div id="score"></div>

    <script>
        let quizz_array = [];

        function loadResultatQuizz() {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const xmlhttp = new XMLHttpRequest();
            const id = "<?php echo $quizzresultat['quizId'] ?>"


            xmlhttp.onload = function() {

                const myObj = JSON.parse(this.responseText);
                let res = myObj.listeOfQuizz.filter(e => e.id == id);
                quizz_array = res;
                let reponse = ""
                let reponsee = "<?php echo $quizzresultat['resultat']; ?>"
                const reponseeArray = reponsee.split(",");
                let q = ""
                let qr = ""
                const nbq = res[0].questions.length
                res[0].questions.forEach((element, i) => {
                    q = "<p><strong> " + element.question + "</strong></p>";

                    element.reponses_possible.forEach((r, j) => {
                        if (reponseeArray[i+1][1] == j) {
                            qr = qr + "<div class=\"form-check\">" +
                                "<input class=\"form-check-input\" type=\"radio\" name=\"question" + i + "\"  value=\"" + String(r) + "\" id='reponse" + j + "' disabled checked>" +
                                ' <label class="form-check-label" for="reponse' + j + '" id="labelq' + i + 'r' + j + '">' +
                                r + "</label> </div>"
                        } else {
                            qr = qr + "<div class=\"form-check\">" +
                                "<input class=\"form-check-input\" type=\"radio\" name=\"question" + i + "\"  value=\"" + String(r) + "\" id='reponse" + j + "' disabled>" +
                                ' <label class="form-check-label" for="reponse' + j + '" id="labelq' + i + 'r' + j + '">' +
                                r + "</label> </div>"
                        }
                        //On recupere toutes les reponses possibles on les concat
                    })
                    reponse = reponse + q + qr + "</br>";
                    qr = "";

                })

                document.getElementById("display-quizz").innerHTML = reponse

                let score = 0;
                let res1 = [];

                // LOOP FOR GOING THROUGH ALL QUESTIONS
                for (let i = 0; i < nbq; i++) {
                    let radiosName = document.getElementsByName('question' + i);
                    radiosName.disabled = true;

                    //LOOP FOR CHECKING ANSWERS INSIDE EACH RADIO
                    for (var j = 0; j < radiosName.length; j++) {

                        let label = document.getElementById("labelq" + i + "r" + j)
                        var radiosValue = radiosName[j];
                        if (radiosValue.value == quizz_array[0].questions[i].reponse_exacte && radiosValue.checked) {

                            radiosValue.style.backgroundColor = "green";
                            label.style.color = "green";
                            score = score + 1;
                            res1.push(['q' + i, 'r' + j]);

                        }

                        if (radiosValue.value != quizz_array[0].questions[i].reponse_exacte && radiosValue.checked) {
                            label.style.color = "red";
                            label.style.textDecoration = "line-through";
                            res1.push('q' + i, 'r' + j);

                        }

                        if (radiosValue.value == quizz_array[0].questions[i].reponse_exacte) {
                            label.style.backgroundColor = "#b1d9b1";
                            label.style.padding = "1.5px";

                        }
                    }
                }
            }
            xmlhttp.open("GET", "../data/quizz.json");
            xmlhttp.send();
        }
    </script>


</body>

</html>