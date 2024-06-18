<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Mon compte | Article & Quizz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/edituserdata.css" rel="stylesheet">

    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include("../shared/nav.php");
    $json1 = file_get_contents('../data/user.json');
    $json_user = json_decode($json1, true);

    $json = file_get_contents('../data/quizz.json');
    $json_quizz = json_decode($json, true);

    ?>

    <div class="div-articles-lu">
        <h2>Articles lu</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Articles</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><a href="http://localhost/article/jsshorthand.php?id=ARTC4">Javascript Shorthand</a></td>
                    <td>11/02/2023</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><a href="/article/animation.php?id=ARTC3">Animation css</a></td>
                    <td>19/12/2022</td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="div-quizz-repondu">
        <h2>Quizz répondu </h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quizz</th>
                    <th scope="col">Score</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($json_user["quizscore"] as $elment) {
                ?>

                    <tr>
                        <th scope="row">1</th>
                        <td><a href="http://localhost/quizz/resultat.php?idres=<?php echo $elment['id']; ?>">
                                <?php foreach ($json_quizz['listeOfQuizz'] as $q) {                                
                                  if ($q['id'] == $elment['quizId'])
                                        echo  $q['title'];
                                }
                                ?>
                            </a></td>
                        <td><strong><?php echo $elment['score']; ?></strong></td>
                        <td>21/08/2023</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <?php //include("edit-user-data.php"); 
    ?>

    <style>
      

        .div-articles-lu h2,
        .div-quizz-repondu h2 {
            margin-bottom: 25px;
            padding: 15px 0;
            color: #1a4589;
            font-weight: bolder;
            border-bottom: 2px solid #1a4589;
        }

        .div-articles-lu,
        .div-quizz-repondu {
            width: 70vw;
            margin: 60px auto;
            padding: 40px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 4px 4px 7px 10px #e7e7e7;
        }

        .div-articles-lu a,
        .div-quizz-repondu a {
            color: #1a4589;
            display: block;
            font-weight: bolder;
        }
    </style>



</body>

</html>