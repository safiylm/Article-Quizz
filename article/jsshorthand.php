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

      <h2>Declaring variables</h2>
      <div class="div-code">
      <code>
          //Longhand<br/>
          let x;<br/>
          let y;<br/>
          let z= "a";
<br/><br/>
          //Shorthand<br/>
          let x, y, z ="a";
      </code>
</div>
      <h2>Ternary operators</h2>
      <div class="div-code">
      <code>
        //Longhand<br/>
        let number ;<br/>
        if(x > 9 )<br/>
        number = true;<br/>
        else<br/>
        number = false;<br/>
      <br/><br/>
          //Shorthand<br/>
      let number = x > 9 ? true : false;
      </code>
</div>

      <h2>Assignment operators</h2>
      <div class="div-code">
    <code>
      //Longhand<br/>
      x = x+y;<br/>
      x=x-y;<br/>
      <br/><br/>
        //Shorthand<br/>
    x+=y;<br/>
    x-=y;<br/>
      </code>
</div>
  <!--    <h2>Switch case</h2>
  <div class="div-code">
      <code>
  //Longhand
<br/><br/>
  //Shorthand
      </code>
</div>
      <h2>if prescence</h2>
      <div class="div-code">
      <code>
  //Longhand
  <br/><br/>
    //Shorthand
      </code>
</div>
      <h2>Arrow fucntions</h2>
      <div class="div-code">
      <code>
  //Longhand

  <br/><br/>
    //Shorthand
      </code>
      </div>
-->
    <div id="display-quizz"></div>

    <script src='../js/article.js'>
    </script>

    <script src='../js/quizz.js'>
    </script>

</body>

</html>
