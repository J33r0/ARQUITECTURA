<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone-number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "arquitectura.strasbourg@gmail.com";

    // Set the email subject
    $subject = "Projet pour $name";

    // Compose the email body
    $body = "Nom: $name\n";
    $body .= "Telephone : $phone\n";
    $body .= "Email: $email\n";
    $body .= "Description du projet: $message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "success";
    } else {
        echo "error";
    }
}
//http://arquitectura.alwaysdata.net/arquitectura/form.php
?>
