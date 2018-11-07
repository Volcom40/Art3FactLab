<!-- mailto:j.rossignol@intech-sud.com?subject=Fomulaire Art3fact Lab -->
<!-- pol.olory@gmail.com -->
 <?php
foreach ($_POST as $key => $value) {
    echo $key . " -> " . $value . "<br/>";
}
     // Adresse mail qui sera contactée 
     $subject = 'Fomulaire contact Art3fact Lab - ' . $_POST["Nom"];

     $message = $_POST["message"] .
     "\r\n\r\nMail généré par le site web Art3FactLab de :\r\nNom : " . $_POST["Nom"] .
     "\r\nTel : " . $_POST["Tel"] .
     "\r\nMail : " . $_POST["Mail"];

     $headers = 'From: '. MAIL_ADDRESSE . "\r\n" .
     'Reply-To: ' . $_POST["Mail"] . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     echo "<br/><br/>" . $subject . "<br/><br/>";
     echo $message . "<br/>";

     ini_set ( "SMTP", ADDRESSE_SMTP ); 
     ini_set ( "smtp_port", PORT_SMTP ); 
     ini_set("sendmail_from", MAIL_ADDRESSE);

     //login du compte mail
     ini_set("auth_username", MAIL_ADDRESSE);

     //mot de passe du compte mail
     ini_set("auth_password",MAIL_PASS);
     mail($to, $subject, $message, $headers);
?>