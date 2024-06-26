let quizz_array = [];

function loadQuizz() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const xmlhttp = new XMLHttpRequest();
    const id = urlParams.get('id')


    xmlhttp.onload = function () {

        const myObj = JSON.parse(this.responseText);
        let res = myObj.listeOfQuizz.filter(e => e.id == id);
        quizz_array = res;
        let reponse = ""
        let q = ""
        let qr = ""
        const nbq = res[0].questions.length
        res[0].questions.forEach((element, i) => {
            q = "<p><strong> " + element.question + "</strong></p>";

            element.reponses_possible.forEach((r, j) => {
                qr = qr + "<div class=\"form-check\">" +
                    "<input class=\"form-check-input\" type=\"radio\" name=\"question" + i + "\"  value=\"" + String(r) + "\" id='reponse" + j + "'>"
                    + ' <label class="form-check-label" for="reponse' + j + '" id="labelq' + i + 'r' + j + '">'
                    + r + "</label> </div>"
                //On recupere toutes les reponses possibles on les concat
            })
            reponse = reponse + q + qr + "</br>";
            qr = "";

        })

        document.getElementById("display-quizz").innerHTML =
            reponse + "<button class='btn btn-primary' type='submit' onClick='return getResults(" + nbq + ", \""+ id+"\");'> Envoyer mes réponses </button>"

    }
    xmlhttp.open("GET", "../data/quizz.json");
    xmlhttp.send();
}


function getResults(nbquestions, id) {

    let score = 0;
    let res = [];

    // LOOP FOR GOING THROUGH ALL QUESTIONS
    for (let i = 0; i < nbquestions; i++) {
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
                res.push(['q'+i , 'r'+j]);

            }

            if (radiosValue.value != quizz_array[0].questions[i].reponse_exacte && radiosValue.checked) {
                label.style.color = "red";
                label.style.textDecoration = "line-through";
                res.push('q'+i , 'r'+j);

            }

            if (radiosValue.value == quizz_array[0].questions[i].reponse_exacte) {
                label.style.backgroundColor = "#b1d9b1";
                label.style.padding = "1.5px";

            }
        }
    }

    document.location.href = "post-quizz.php?id=" + id + "&score=" + score + "/" + nbquestions+"&resultat="+res;
    //document.getElementById('score').innerHTML = "<p>Votre score : " + score + "/" + nbquestions + " </p>"

}

