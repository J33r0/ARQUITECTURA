<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone-number"]
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "arquitectura.strasbourg@gmail.com";

    // Set the email subject
    $subject = "Projet pour $name";

    // Compose the email body
    $body = "Nom: $name\n";
    $body .= "Telephone : $phone\n"
    $body .= "Email: $email\n";
    $body .= "Description du projet: $message\n";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Merci pour votre message, nous allons repondre dans les plus brefs delais !";
    } else {
        echo "Il y a eu une erreur lors de l'envoi du formulaire, essayez a nouveau.";
    }
}
?>
