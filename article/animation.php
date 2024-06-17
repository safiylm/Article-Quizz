<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <title> Article & Quizz | Animation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/articles.css" />
    <link rel="stylesheet" href="../styles/quizz.css" />
    <!-- //for font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    #contenu{
      width: 95vw;
    }
    </style>
</head>

<body onload="loadArticle(); loadQuizz();">

    <?php include("../shared/nav.php"); ?>


    <div id="display-article">
    </div>
    <div id="contenu">

        <style>
            #image-gallery {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                max-width: 50rem;
                margin-inline: auto;
            }

            #image-gallery>img {
                width: 100%;
                aspect-ratio: 1/1;
                object-fit: cover;
                transition: scale 350ms ease, opacity 350ms linear;
            }

            #image-gallery:has(img:hover) img:not(:hover) {
                scale: .8;
                opacity: .7;

            }
        </style>

        <div id='div-demo-code' class='d-flex flex-wrap align-items-center justify-content-around'>
            <div id='div-demo'>
                <div id='image-gallery'>

                    <img src="https://images.pexels.com/photos/23939503/pexels-photo-23939503/free-photo-of-a-city-street-with-a-red-painted-line-and-a-building.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" />
                    <img src="https://images.pexels.com/photos/18493337/pexels-photo-18493337/free-photo-of-cup-of-coffee-and-notepad-on-cafe-table.jpeg?auto=compress&cs=tinysrgb&w=1200&lazy=load" />
                    <img src="https://images.pexels.com/photos/24182494/pexels-photo-24182494/free-photo-of-great-egret.jpeg?auto=compress&cs=tinysrgb&w=1200&lazy=load" />
                </div>
            </div>
            <div class="div-code">
            <code>
                #image-gallery{<br />
                display:grid;<br />
                grid-template-columns: repeat(3,1fr);<br />
                max-width: 50rem;<br />
                margin-inline: auto;<br />
                }<br /><br />
                #image-gallery > img{<br />
                width: 100%;<br />
                aspect-ratio:1/1;<br />
                object-fit: cover;<br />
                transition:scale 350ms ease, opacity 350ms linear;<br />
                }<br /><br />
                #image-gallery:has(img:hover) img:not(:hover){<br />
                scale:.8;<br />
                opacity: .7;<br />
                }


            </code>
        </div></div> <br />

        <style>
              #transform-translate ,
               #transform-rotate,
               #transform-skew ,
               #transform-scale ,
               #transform-matrix {
                width: 100px;
                height: 100px;
                background-color: plum;
                margin: 10px ;
               }
            #transform-translate:hover {
                transform: translate(-5px, -10px);
            }

            #transform-rotate:hover {
            transform: rotate(15deg);}

            #transform-skew:hover {
            transform: skew(-5deg, -10deg);}

            #transform-scale:hover {
            transform: scale(0.7);}


            #transform-matrix:hover {
            transform: matrix(0,1,1,0,0,0);}
        </style>

        <div id='div-demo-code' class='d-flex flex-wrap align-items-center justify-content-around'>
            <div id='div-demo'>
                <div id='transform-translate'></div>
                <div id='transform-rotate'></div>
                <div id='transform-skew'></div>
                <div id='transform-scale'></div>
                <div id='transform-matrix'></div>
            </div>
            <div class="div-code">
            <code>
            #transform-translate {<br />
                transform: translate(-5px, -10px);
            }
            <br /><br />
            #transform-rotate {<br />
            transform: rotate(15deg);}
            <br /><br />
            #transform-skew {<br />
            transform: skew(-5deg, -10deg);}
            <br /><br />
            #transform-scale {<br />
            transform: scale(0.7);}

            <br /><br />
            #transform-matrix {<br />
            transform: matrix(0,1,1,0,0,0);}<br />

            </code>
        </div>   </div> <br />



        <style>
            #demo1 {
                margin: 0 85px;
                width: 100px;
                height: 100px;
                background-color: red;
            }

            #demo1:hover {
                animation-name: example;
                animation-duration: 4s;
            }

            @keyframes example {
                from {
                    background-color: red;
                }

                to {
                    background-color: yellow;
                }
            }
        </style>

        <div id='div-demo-code' class='d-flex flex-wrap align-items-center justify-content-around'>
            <div id='div-demo'>
                <div id='demo1'></div>
            </div>
            <div class="div-code">
            <code>
                #demo1 <br />{ <br />width: 100px; <br />
                height: 100px; <br />
                background-color: red; <br />
                } <br /><br />

                #demo1:hover <br />
                { <br />
                animation-name: example; <br />
                animation-duration: 4s; <br />
                } <br /><br />

                @keyframes example <br />{ <br />
                from {background-color: red;} <br />
                to {background-color: yellow;} <br />
                }
            </code>
        </div>  </div>  <br />

        <style>
            #demo2 {
                margin: 0 85px;
                width: 100px;
                height: 100px;
                position: relative;
                background-color: red;
                animation-name: example2;
                animation-duration: 4s;
            }

            @keyframes example2 {
                0% {
                    background-color: red;
                    left: 0px;
                    top: 0px;
                }

                25% {
                    background-color: blue;
                    left: 200px;
                    top: 0px;
                }

                50% {
                    background-color: green;
                    left: 200px;
                    top: 200px;
                }

                75% {
                    background-color: purple;
                    left: 0px;
                    top: 200px;
                }

                100% {
                    background-color: red;
                    left: 0px;
                    top: 0px;
                }
            }
        </style>


        <div id='div-demo-code' class='d-flex flex-wrap align-items-center justify-content-around'>
            <div id='div-demo'>
                <div id='demo2'></div>
            </div>

            <div class="div-code">
            <code> #demo2 <br />
                { <br />
                width: 100px; <br />
                height: 100px; <br />
                background-color: red; <br />
                position: relative;<br />
                animation-name: example; <br />
                animation-duration: 4s; <br />
                } <br /><br />

                @keyframes example <br />{ <br />
                0% {background-color:red;<br />
                left:0px; top:0px;
                }
                <br /><br />
                25% {background-color:blue;<br />
                left:200px; top:0px;
                }
                <br /><br />
                50% {background-color:green;<br />
                left:200px;
                top:200px;}
                <br /><br />
                75% {background-color:purple;<br />
                left:0px;
                top:200px;
                }
                <br /><br />
                100% {
                background-color:red;<br />
                left:0px;
                top:0px;}}
            </code>
        </div>   </div> <br />


    </div>

    <div id="display-quizz"></div>

    <script src='../js/article.js'>
    </script>

    <script src='../js/quizz.js'>
    </script>

</body>

</html>
