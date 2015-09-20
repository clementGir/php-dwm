<!DOCTYPE html>
<html>
	<head>
		<title>Exercice PHP | Clement Girault</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		<div class="maDemande">
			<div class="content">
				<h1>Cher Papa,</h1>
				<form method="get" id="questions"> 
					<p>J'ai besoin de ta voiture pour :</p>
					<ul> 
						<li>
							<label for="trenteMinutes">30 minutes</label>
							<input type="checkbox" id="trenteMinutes" name="time" value="trenteMinutes" 
								<?php if ($_GET[time] == 'trenteMinutes'){ echo "checked";} ?>
							>
							<p class="label">30 minutes</p>				
						</li> 

						<li>
							<label for="unJour">1 jour</label>
							<input type="checkbox" id="unJour" name="time" value="unJour"
								<?php if ($_GET[time] == 'unJour'){ echo "checked";} ?>
							>
							<p class="label">1 jour</p>	
						</li>
						
						<li>
							<label for="deuxJours">2 jours</label>
							<input type="checkbox" id="deuxJours" name="time" value="deuxJours"
								<?php if ($_GET[time] == 'deuxJours'){ echo "checked";} ?>
							>
							<p class="label">2 jours</p>	
						</li>
					</ul>
					<p>Parce que je voudrais aller :</p>
					<ul> 
						<li>
							<label for="pecho">pécho</label>
							<input type="checkbox" id="pecho" name="activity" value="pecho"
								<?php if ($_GET[activity] == 'pecho'){ echo "checked";} ?>
							>
							<p class="label">pécho</p>					
						</li> 

						<li>
							<label for="amsterdam">à Amsterdam</label>
							<input type="checkbox" id="amsterdam" name="activity" value="amsterdam"
								<?php if ($_GET[activity] == 'amsterdam'){ echo "checked";} ?>
							>
							<p class="label">à Amsterdam</p>	
						</li>
						
						<li>
							<label for="singelMalt">te chercher du Singel Malt</label>
							<input type="checkbox" id="singelMalt" name="activity" value="singelMalt"
								<?php if ($_GET[activity] == 'singelMalt'){ echo "checked";} ?>
							>
							<p class="label">te chercher du singel Malt</p>	
						</li>
					</ul>
				</form>
			</div>
			<input type="submit" form="questions" value="Oki oki?">
		</div>
		
		<div class="saReponse">
			<?php 
				isTimeGood();
				isActivityGood();
				answerThePoorGuy();
			?>
		</div>
	</body>
</html>

<?php

	function isTimeGood() {

		$time = $_GET[time];

    	if (isset($time)) {
			if ($time == 'trenteMinutes') {
				return bonneReponse;
			}
			else {
				return mauvaiseReponse;
			}
		}
		else {
			return vide;
		}
	}

	function isActivityGood() {

		$activity = $_GET[activity];

    	if (isset($activity)) {
			if ($activity == 'singelMalt') {
				return bonneReponse;
			}
			else {
				return mauvaiseReponse;
			}
		}
		else {
			return vide;
		}
	}

	function answerThePoorGuy() {

	// check if questions are answered.
		if (isTimeGood() == vide) {
			echo "<p>Tu en as besoin combien de temps? </p>";
		}
		if (isActivityGood() == vide) {
			echo "<p>Tu en as besoin pour faire quoi? </p>";
		}

	// Check for right answer
		if (isTimeGood() == bonneReponse && isActivityGood() == bonneReponse) {
			echo "<p>Ok ok, un Highland Park fera l'affaire. Prends toi une grenadine. </p>";
			echo "<img class='bmw' src='bmw.jpg' alt='ma BMW'>";
			// + photo bmw
		}

	// check for half right answers
		if (isTimeGood() !== bonneReponse && isActivityGood() == bonneReponse){
			echo "<p>Je veux bien que tu aille m'en chercher, mais sois rapide. </p>";
		}
		elseif (isTimeGood() == bonneReponse && isActivityGood() !== bonneReponse){
			echo "<p>Tu peux la prendre 30 minutes, mais il me faut une excuse valable. </p>";
		}

	// Throw error at face
		if (isTimeGood() == mauvaiseReponse){
			echo "<p>Tu ne peux pas partir aussi longtemps. </p>";
		}
		if (isActivityGood() == mauvaiseReponse){
			echo "<p>Trouve une excuse valable. </p>";
		}
	}
?>