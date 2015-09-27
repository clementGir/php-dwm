<?php include 'phpCode.php';?>

<!doctype html>
<html>
	<head>
	    <?php include 'head.php';?>
	</head>

	<body>
		<header>
			<a href="https://github.com/clementGir/php-dwm/tree/master/tp2">GitHub</a>
			<h1>Devenir membre</h1>
		</header>
		<div class="intro">
			<p>Le cercle organise diverses activités : Bunker, participation aux journées portes ouvertes de l’école, organisation de soirées avec le cercle Informatique, visites d’expositions, etc.</p>
			<p>Envie de participer, de rencontrer du monde ou simplement de picoler? Rejoins nous!</p>
		</div>
		<div class="adhesion">
			<h4>Adhésion</h4>
			<?php echo $result; ?>
			<?php include 'form.php';?>
		</div>
	</body>
</html>




