<?php

// Headers
$headers = "From: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Retranscription variable raison 
if ($raison = "participer") {
   $raison = "Pour participer à la vie de l'ESIAJ.";
}
elseif ($raison = "Rencontrer") {
   $raison = "Pour rencontrer des gens.";
}
else {
   $raison = "il ne sais pas pourquoi.";
}

// Message
$message = '<html><body>';
$message .= '<h1>Bonjour,</h1>';
$message .= '<h3>' . $prenom . ' souhaite souhaite faire partie des bleus!</h3>';
$message .= '<p>Voici les informations le concernant:</p>';
$message .= '<ul>';
$message .= '<li>Nom: '. $nom . '</li>';
$message .= '<li>Prenom: '. $prenom . '</li>';
$message .= '<li>Adresse email: '. $email . '</li>';
$message .= '<li>Date de naissance: '. $dateDeNaissance . '</li>';
$message .= '<li>Adresse: '. $adresse . '</li>';
$message .= '<li>Vile / Commune: '. $ville . '</li>';
$message .= '<li>Raison: '. $raison . '</li>';
$message .= '</ul>';
$message .= '</body></html>';

?>

