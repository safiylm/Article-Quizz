<?php

$path = '../data/user.json';
$json_object = file_get_contents($path);
$tab = json_decode($json_object, true);

$newScore = array();
$newScore['userId'] = 1;
$newScore["quizId"] = $_GET['id'];
$newScore["score"] = $_GET["score"];
array_push($tab["quizscore"], $newScore);

print_r($newScore);

$jsonString = json_encode($tab, JSON_PRETTY_PRINT);
// // Write in the file
$fp = fopen($path, 'w');
fwrite($fp, $jsonString);
fclose($fp);

//echo "<script>document.location.href='index.php?id=".  $_GET['id']."&resultat=". $_GET['score'] ."';</script>"
?>