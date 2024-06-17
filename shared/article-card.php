<?php
function article_card($element)
{
    echo '<div class="div-article">
    <img id="image" src="' . $element["image"] . '" />
    <a href="' . $element["url"] . '?id=' . $element["id"] . '"> '. $element['title'] .'</a>
</div>';
}
?>