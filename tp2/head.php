<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<?php 
// Detect mobile
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	if ( $detect->isMobile() ) {
 		echo "<link rel='stylesheet' href='stylesMobile.css'>";
	}
	else {
		echo "<link rel='stylesheet' href='styles.css'>";
	}
?>

<meta name="description" content="Le Cercle des étudiants de l’ ESIAJ recrute. Nous avons publier une page résumant les bonnes raisons de devenir membre, avec un formulaire d’inscription.">
<meta name="robots" content="index, nofollow">
<meta name="author" content="Clément Girault">
<title>Inscription | Le Cercle des étudiants</title>

<meta property="og:title" content="Inscription | Le Cercle des étudiants">
<meta property="og:site_name" content="Le Cercle des étudiants">
<meta property="og:url" content="clementgirault.com/projets/php/tp2/">
<meta property="og:description" content="Le Cercle des étudiants de l’ ESIAJ recrute. Nous avons publier une page résumant les bonnes raisons de devenir membre, avec un formulaire d’inscription.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://clementgirault.com/projets/php/tp2/images/dwm.png"/>

<meta name="twitter:card" content="app">
<meta name="twitter:site" content="@GiraultClement">
<meta name="twitter:image" content="http://clementgirault.com/projets/php/tp2/images/dwm.png">

<link rel="apple-touch-icon" sizes="57x57" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="http://clementgirault.com/projets/php/tp2/images/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="http://clementgirault.com/projets/php/tp2/images/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="http://clementgirault.com/projets/php/tp2/images/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="http://clementgirault.com/projets/php/tp2/images/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="http://clementgirault.com/projets/php/tp2/images/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="http://clementgirault.com/projets/php/tp2/images/manifest.json">
<link rel="shortcut icon" href="http://clementgirault.com/projets/php/tp2/images/favicon.ico">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="http://clementgirault.com/projets/php/tp2/images/mstile-144x144.png">
<meta name="msapplication-config" content="http://clementgirault.com/projets/php/tp2/images/browserconfig.xml">
<meta name="theme-color" content="#000000">
