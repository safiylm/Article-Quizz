<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title> Article & Quizz | Jquery Event </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="loadArticle();">

    <?php include("../shared/nav.php"); ?>

    <div id="display-article">
    </div>

    <div id="contenu">

        <table>

            <tr>
                <th>Mouse Events</th>
                <th>Keyboard Events</th>
                <th>Form Events</th>
                <th>Document/Window Events</th>
            </tr>
            <tr>
                <td>click</td>
                <td>keypress</td>
                <td>submit</td>
                <td>load</td>
            </tr>
            <tr>
                <td>dblclick</td>
                <td>keydown</td>
                <td>change</td>
                <td>resize</td>
            </tr>
            <tr>
                <td>mouseenter</td>
                <td>keyup</td>
                <td>focus</td>
                <td>scroll</td>
            </tr>
            <tr>
                <td>mouseleave</td>
                <td></td>
                <td>blur</td>
                <td>unload</td>
            </tr>
        </table>

        mouseenter()
        The funcƟon is executed when the mouse pointer enters the HTML element:
        mouseleave( )
        The function is executed when the mouse pointer leaves the HTML element:
        mousedown( )
        The function is executed, when the left, middle or right mouse button is pressed down, while
        the mouse is over the HTML element:
        mouseup( )
        The function is executed, when the left, middle or right mouse button is released, while the
        mouse is over the HTML element:
        hover( )
        The hover() method takes two functions and is a combination of the mouseenter() and
        mouseleave() methods.
        The first function is executed when the mouse enters the HTML element, and the second
        function is executed when the mouse leaves the HTML element:
        focus( )
        The function is executed when the form field gets focus:
        blur( )
        The function is executed when the form field loses focus:
        The on() method attaches one or more event handlers for the selected elements.

        <code>
            $("p").on({
            mouseenter: funcƟon(){
            $(this).css("background-color", "lightgray");
            },
            mouseleave: funcƟon(){
            $(this).css("background-color", "lightblue");
            },
            click: funcƟon(){
            $(this).css("background-color", "yellow");
            }
            })
        </code>

        jQuery toggle()
        You can also toggle between hiding and showing an element with the toggle() method.
        Shown elements are hidden and hidden elements are shown

    </div>



    <script src='../js/article.js'>
    </script>

</body>

</html>