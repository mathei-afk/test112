<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];
    
    $to = "mateiog38@gmail.com";
    $subject = "Mesaj nou de pe site";
    $message = "Nume: $nume\n";
    $message .= "E-mail: $email\n";
    $message .= "Mesaj: $mesaj\n";
    
    mail($to, $subject, $message);
    
    echo "Mesajul tău a fost trimis cu succes!";
}
?>
