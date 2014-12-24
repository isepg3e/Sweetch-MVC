<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8"/>
		<title>Inscription | Échange de logements | Sweetch</title>
		<link rel="stylesheet" href="CSS/inscription.css"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>

	</head>
	
	<body>
		<section>

			<div class="leftbox">
			
				<form method="POST" >
					<table>
						<tr>
							<td class="inscription" colspan=2 >S'inscrire</td>
						</tr>

						<tr>
							<td class="content">Nom :</td>
							<td class="content"><input class="input" id="nom" type="text" name="nom" placeholder="Entrez votre nom."/></td>
						</tr>

						<tr>
							<td class="content">Prénom :</td>
							<td class="content"><input class="input" id="prenom" type="text" name="prenom" placeholder="Entrez votre prénom"/></td>
						</tr>

						<tr>
							<td class="content">Date de naissance :</td>
							<td class="content"><input class="input" id="age" type="date" name="age" placeholder="JJ/MM/AAAA"/></td>
						</tr>

						<tr>
							<td class="content">e-mail :</td>
							<td class="content"><input class="input" id="email" type="mail" name="email" placeholder="exemple@hotmail.fr"/></td>
						</tr>

						<tr>
							<td class="content">Pseudo :</td>
							<td class="content"><input class="input" id="pseudo" type="text" name="pseudo" placeholder="Créez votre pseudo"/></td>
						</tr>

						<tr>
							<td class="content">Mot de passe :</td>
							<td class="content"><input class="input" id="mdp" type="password" name="mdp" placeholder="Créez votre mot de passe"/></td>
						</tr>

						<tr>
							<td class="content">Confirmation du mot de passe :</td>
							<td class="content"><input class="input" id="cmdp" type="password" name="cmdp" placeholder="Confirmez votre mot de passe"/></td>
						</tr>

						<tr>
							<td class="conditions"><a href="">Voir les conditions générales d'utilisation</a></td>
						</tr>

						<tr>
							<td class="content">J'accepte les CGU<input class="check" id="checkbox" type="checkbox" name="checkbox"/></td>
						</tr>

						<tr>
							<td class="content" colspan=2> <input type="button" onclick="inscriptionXML()" value="S'inscrire"/> </td>
						</tr>
					</table> 
				</form>

			</div>
			<div class="rightbox">
				<center><img src="Images/sweetch-marketing.png" alt="échangez vos logements avec Sweetch"/></center>
			</div>
		
		</section>
			<div id="ligneErreur">
			</div>
		
	<script src="Modele/inscription.js" type="text/javascript"></script> 
		
	</body>
</html>
