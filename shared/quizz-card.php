<?php
function quizz_card($element)
{
    echo '<div class="div-article">
    <img id="image" src="' . $element["image"] . '" />
    <a href="quizz/?id=' . $element["id"] . '"> '. $element['title'] .'</a>
</div>';
}
?>