<!DOCTYPE html>

<?php
session_start();

$path='../data/user.json';
$json_object = file_get_contents($path);
$tab = json_decode($json_object, true);


print_r($_POST); echo "</br></br></br>";
$newuser=array();

//ID
//$nbuser = count($tab["listeOfUser"]);
//$newid = $tab["listeOfUser"][$nbuser ]['id'] +1 ;

$newuser['id']= 2;

$newuser['nom']= $_POST['nom'];
$newuser['prenom']=  $_POST['prenom'];
$newuser['email']= $_POST['email'];
$newuser['password']= password_hash($_POST['password'],  PASSWORD_BCRYPT);


print_r($newuser);
$_SESSION['user'] = $newuser;

array_push($tab["listeOfUser"], $newuser);


$jsonString = json_encode($tab , JSON_PRETTY_PRINT);
// Write in the file
$fp = fopen($path, 'w');
fwrite($fp, $jsonString);
fclose($fp);


header('Location: ../index.php');
exit();
