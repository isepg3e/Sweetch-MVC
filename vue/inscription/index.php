<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="vue/inscription/style.css">
		<title>Inscription | Sweetch</title>
	</head>

	<body>
		<form method="POST" action="controleur/inscription/index.php">
			<table class="table-inscription">
				<tr>
					<td class="inscription-i" colspan=2 >S'inscrire</td>
				</tr>

				<tr>
					<td class="content-i">Nom :</td>
					<td class="content-i"><input class="input-i" type="text" name="nom" placeholder="Entrez votre nom."/></td>
				</tr>

				<tr>
					<td class="content-i">Prénom :</td>
					<td class="content-i"><input class="input-i" type="text" name="prenom" placeholder="Entrez votre prénom"/></td>
				</tr>

				<tr>
					<td class="content-i">Date de naissance :</td>
					<td class="content-i"><input class="input-i" type="date" name="age" placeholder="JJ/MM/AAAA"/></td>
				</tr>

				<tr>
					<td class="content-i">e-mail :</td>
					<td class="content-i"><input class="input-i" type="mail" name="email" placeholder="exemple@hotmail.fr"/></td>
				</tr>

				<tr>
					<td class="content-i">Pseudo :</td>
					<td class="content-i"><input class="input-i" type="text" name="pseudo" placeholder="Créez votre pseudo"/></td>
				</tr>

				<tr>
					<td class="content-i">Mot de passe :</td>
					<td class="content-i"><input class="input-i" type="password" name="mdp" placeholder="Créez votre mot de passe"/></td>
				</tr>

				<tr>
					<td class="content-i">Confirmation du mot de passe :</td>
					<td class="content-i"><input class="input-i" type="password" name="cmdp" placeholder="Confirmez votre mot de passe"/></td>
				</tr>

				<tr>
					<td class="conditions-i"><a href="">Voir les conditions générales d'utilisation</a></td>
				</tr>

				<tr>
					<td class="content-i">J'accepte les CGU<input class="check-i" type="checkbox" name="checkbox"/></td>
				</tr>

				<tr>
					<td class="content-i" colspan=2><input type="submit" value="S'inscrire"/></td>
				</tr>
			</table>
			<?php  include("erreur.php"); ?> 
		</form>
	</body>
</html>