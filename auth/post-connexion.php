<?php
session_start();

$user = 'root';
$password = 'root';
$dbName = 'yilindo';
$host = 'localhost';
$port = 33066;


$mysqli = new mysqli($host, $user, $password, $dbName, $port);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
}

printf("Success... %s\n", $mysqli->host_info);


$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


if (!empty($email) && !empty($password)) {


    $sql = "SELECT * FROM utilisateur WHERE email = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    echo "Number of row" . $result->num_rows . "\n";

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $hash = $user['password'];

        if (password_verify($password, $hash)) {
            echo 'Password is valid!\n ';
            $_SESSION['utilisateur']['nom'] = $user['nom'];
            $_SESSION['utilisateur']['prenom'] = $user['prenom'];
            $_SESSION['utilisateur']['email'] = $user['email'];
            $_SESSION['utilisateur']['password'] = $user['password'];
            $_SESSION['utilisateur']['service'] = $user['service'];
            $_SESSION['utilisateur']['matricule'] = $user['matricule'];
            $_SESSION['utilisateur']['direction'] = $user['direction'];
            $_SESSION['utilisateur']['contrat'] = $user['contrat'];
         $_SESSION['utilisateur']['dateInscription'] = $user['dateInscription'];;



            print_r($_SESSION);
            header('Location: ../account/index.php');
            exit();

        } else {
          
            header('Location: connexion.php?pwdinvalid=true');
            exit();
        }
    }
    else{
        header('Location: connexion.php?emailinvalid=true');
        exit();
    }
    if ($mysqli->errno) {
        printf("Could not find into table: %s<br />", $mysqli->error);
    }
}



$mysqli→close();

?>