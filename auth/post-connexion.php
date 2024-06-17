<?php
session_start();

$path='../data/user.json';
$json_object = file_get_contents($path);
$tab = json_decode($json_object, true);



 $email = $_POST['email'];
 $password = $_POST['password'];

foreach($tab["user"] as $user){
    if($user['email'] == $email){
       if(password_verify( $password, $user['password'] ) ){
         
          // connexion réussi
            $_SESSION['user'] = $user;

            header('Location: ../index.php');
            exit();
        }else{
            echo "password incorrecte";
            header('Location: index.php?error=password');
            exit();

        }
    }
}

header('Location: index.php?error=emailpassword');
exit();
