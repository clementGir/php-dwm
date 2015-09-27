<form method="post" id="adhesion" class="pure-form pure-form-stacked">
	<ol>
		<li>
			<label for="userEmail">userEmail</label>
			<input id="userEmail" name="userEmail">
		</li>
		<li>
			<label for="nom">Mon nom:</label>
			<input id="nom" name="nom" required <?php if ($_POST[nom] !== ''){ echo "value='".$_POST[nom]."'"; } ?>>
			<span class="required">Requis</span>
		</li>
		<li>
			<label for="prenom">Mon prénom:</label>
			<input id="prenom" name="prenom" required <?php if ($_POST[prenom] !== ''){ echo "value='".$_POST[prenom]."'"; } ?>>
			<span class="required">Requis</span></li>

		<li>
			<label for="email">Mon adresse email:</label>
			<input type="email" id="email" name="email" required <?php if ($_POST[email] !== ''){ echo "value='".$_POST[email]."'"; } ?>>
			<span class="required">Requis</span></li>

		<li>
			<label for="dateDeNaissance">Ma date de naissance:</label>
			<input type="date" id="dateDeNaissance" name="dateDeNaissance" required <?php if ($_POST[dateDeNaissance] !== ''){ echo "value='".$_POST[dateDeNaissance]."'"; } ?>>
			<span class="required">Requis</span></li>

		<li>
			<label for="adresse">Mon adresse:</label>
			<textarea id="adresse" name="adresse" <?php if ($_POST[adresse] !== ''){ echo "value='".$_POST[adresse]."'"; } ?>></textarea>
		</li>
		<li>
			<label for="ville">Ma ville / commune:</label>
			<input id="ville" name="ville" <?php if ($_POST[ville] !== ''){ echo "value='".$_POST[ville]."'"; } ?>>
		</li>
		<li>
			<label for="raison">Raison de l'adhésion:</label>
	        <select name="raison" id="raison" selected="rencontrer">
	           <option value="participer" <?php if($_POST[raison] == 'participer'){echo("selected");}?>>Pour participer à la vie de l'ESIAJ</option>
	           <option value="rencontrer" <?php if($_POST[raison] == 'rencontrer'){echo("selected");}?>>Pour rencontrer des gens</option>
	           <option value="inconnue" <?php if($_POST[raison] == 'inconnue'){echo("selected");}?>>Franchement je sais pas</option>                   
			</select>
		</li>
	</ol>
</form>
<input type="submit" form="adhesion" class="pure-button pure-button-primary">