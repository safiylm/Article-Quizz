<script>
        $(document).ready(function() {
            $('#cacher').hide();
        })

        </script>

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

//printf("Success... %s\n", $mysqli->host_info);



$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$service = htmlspecialchars($_POST['service']);
$direction = htmlspecialchars($_POST['direction']);
$matricule = htmlspecialchars($_POST['matricule']);
$contrat = htmlspecialchars($_POST['contrat']);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);





$parts = explode('/', $_POST['actualDate']);
$date  =  $_POST['actualDate'];

if (
    !empty($nom) && !empty($prenom) && !empty($email) && !empty($password)
    && !empty($service) && !empty($direction) && !empty($matricule) && !empty($contrat)
) {

    $sql = "Select * FROM utilisateur WHERE email='" . $_POST['email'] . "'";


    if ($mysqli->query($sql)->num_rows > 0) { ?>

        <div id="checkOK" style='   margin: 15% auto;

text-align: center;
min-width: 700px;
height: auto ;
padding: 20vh;
background-color: salmon;
font-size: 25px;
color: white;
font-weight: 100;'>

       Vous êtes déjà inscrit.  <a href='connexion.php' style="color:white;" > Je me connecte. </a>

   </div>
 <?php
    } else {



        $password = password_hash($password,  PASSWORD_DEFAULT);

        $sql = "INSERT INTO utilisateur (nom, prenom, email, password, service, direction, matricule, contrat, dateInscription) " .
            "VALUES ( '" . $nom . "' , '" . $prenom . "' , '" . $email . "' , '" . $password . "' , '" . $service . "', '" . $direction . "' , '" . $matricule . "' , '" . $contrat . "' , '" . $date . "' )";

        if ($mysqli->query($sql)) {
            printf("Record inserted successfully.<br />");

            echo "  <div id='cacher'>";

            try {
                // Server settings
                $mail->SMTPDebug = 2;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'contact.yilindo@gmail.com';                     // SMTP username
                $mail->Password   = 'lalwhibhearpaxjh';                               // SMTP password
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                // Recipients
                $mail->setFrom($email, 'Yilindo');
                $mail->addAddress($email);     // Add a recipient

                // $mail->addAddress('ellen@example.com', 'Joe User');               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // // Attachments
                //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "Confirmation d'inscription à Yilindo";

                $mail->Body    =
                    "<img src='../image/logo.png'/>" .
                    " Cher(e) " . $prenom . " " . $nom . ",
            <br/> <br/>
            Vous voilà désormais membre de Yilindo.
            <br/> <br/>
            Vous n'avez plus qu'à cliquer sur le lien de confirmation ci-dessous, ou à le coller dans votre navigateur,
            et vous pourrez commencer à remplir votre bibliothèque virtuelle.
            http://localhost/Yilindo/auth/confirmation-email/check-mail.php?nom=" . $nom . "&prenom=" . $prenom . "
            <br/> <br/>
            Pour toute question ou remarque sur le site, n'hésitez pas à nous contacter ici : https://www.yilindo.com/contact.php
            <br/> <br/>
            L'équipe de Yilindo";

                $mail->AltBody = 'Confirmation d\' inscription';
                $mail->send();
                print_r($_GET);
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }


echo "</div>";






            header('Location: ../auth/confirmation-email/info-go-check-mail.php');
            exit();
        }
        if ($mysqli->errno) {
            printf("Could not insert record into table: %s<br />", $mysqli->error);
        }
    }
}



$mysqli→close();
