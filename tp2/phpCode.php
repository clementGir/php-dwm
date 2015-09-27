<?php 

function isValidEmail($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL);  
}

if ($_POST) {

	// Winnie's favorite
	if ($_POST['userEmail'] !== "") {
		die("Die you fakin bot");
	}

	// Netoyage 
	$nom = trim(strip_tags($_POST['nom']));
	$prenom = trim(strip_tags($_POST['prenom']));
	$email = trim(strip_tags($_POST['email']));
	$dateDeNaissance = trim(strip_tags($_POST['dateDeNaissance']));
	$adresse = trim(strip_tags($_POST['adresse']));
	$ville = trim(strip_tags($_POST['ville']));
	$raison = trim(strip_tags($_POST['raison']));

	// Verifications
	$error = false;

	if ($nom == '') {
		$result .= "J'ai besoin de ton nom. </br>";
		$error = true;
	}
	if ($prenom == '') {
		$result .= "J'ai besoin de ton prenom. </br>";
		$error = true;
	}
	if ($email == '') {
		$result .= "J'ai besoin de ton adresse email. </br>";
		$error = true;
	}
	elseif (!isValidEmail($email)) {
		$result .= "Merci de rentrer une adresse email valide. </br>";
		$error = true;
	}
	if ($dateDeNaissance == '') {
		$result .= "J'ai besoin de ta date de naissance. </br>";
		$error = true;
	}

	$result = "<div class='result'><p>" . $result . "</p></div>"; 

	// Validation
	include 'email.php';

	if ($error == false) {
		mail("clement.girault@live.fr", "Un nouveau bleu veux rejoindre l'equipe!", $message, $headers);
		if ($email) {
			$result = "Merci, ta demande d'adhésion a bien été envoyé!";
			$result = "<div class='result sent'><p>" . $result . "</p></div>"; 
		}
		else {
			$result = "Desolé, un probleme de serveur à été detecté, merci de nous contacter sur notre page facebook <a href='facebook.com'>facebook.com/cercleESIAJ</a>.";
			$result = "<div class='result'><p>" . $result . "</p></div>"; 
		}
		
	}
}



?>