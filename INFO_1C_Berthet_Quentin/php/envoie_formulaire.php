<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $courriel = $_POST["courriel"];
    $url = $_POST["url"];
    $date = $_POST["date"];
    $choix = implode(", ", $_POST["choix"]);
    $zoneTexte = $_POST["zone-texte"];

    $to = "quentin@berthet.ch";
    $subject = "Nouveau formulaire de contact";
    $message = "Nom: " . $nom . "\n" .
               "Email: " . $email . "\n" .
               "Mot de passe: " . $password . "\n" .
               "Courriel: " . $courriel . "\n" .
               "URL: " . $url . "\n" .
               "Date: " . $date . "\n" .
               "Choix multiple: " . $choix . "\n" .
               "Zone de texte: " . $zoneTexte;

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Le formulaire a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du formulaire.";
    }
}
?>
