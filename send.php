<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST["naam"]);
    $email = htmlspecialchars($_POST["email"]);
    $bericht = htmlspecialchars($_POST["bericht"]);
    $naar = "Sofaivanivna23032007@gmail.com";
    $onderwerp = "Nieuw bericht van portfolio 2026";
    $inhoud = "Naam; $naam\n";
    $inhoud .= "E-mail: $email\n\n";
    $inhoud .= "Bericht:\n$bericht\n";
    $headers = "From: $email";
    if(mail($naar, $onderwerp, $inhoud, $headers)) {
        echo "Bedankt voor je bericht, $naam! We nemen zo snel mogelijk contact met uw op";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van je bericht. Probeer het later opnieuw.";
    }
}