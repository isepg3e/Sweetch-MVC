<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Se connecter | Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="CSS/connexion.css"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>
	</head>

	<body>

		<section>
			
			<form method="POST" >
				<table>
					<tr>
						<td id="title" colspan=2>Se connecter</td>
					</tr>

					<tr>
						<td class="content"><label for="pseudo" class="label">Votre pseudo :</label></td>
						<td class="content"><input class="saisie" id="pseudo" type="text" name="pseudo" placeholder="Ex: pseudo94"/></td>
					</tr>

					<tr>
						<td class="content"><label for="pass" class="label">Votre mot de passe :</label></td>
						<td class="content"><input class="saisie" id="mdp" type="password" name="mdp" placeholder="*******"/></td>
					</tr>

					<tr>
						<td class="forgot"><a href="#">Mot de passe oublié?</a></td>
						<td class="inscription">Pas encore inscrit? - <a href="inscription.php">S'inscrire</a></td>
					</tr>

					<tr>
						<td class="content" colspan=2> <input type="button" onclick="connexionXML()" value="Se connecter"/></td>
					</tr>
				</table>
			</form>
		</section>
		<script src="Modele/connexion.js" type="text/javascript"></script>
	</body>
</html>



