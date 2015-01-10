<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8"/>
		<title>Inscription | Échange de logements | Sweetch</title>
	</head>
	
	<body>
		<section>

		
			
				<form method="POST" action="../Modele/inscriptionBO_POST.php">
					<table>
						<tr>
							<td class="inscription" colspan=2 ><strong>Ajouter un membre<strong/></td>
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
							<td class="content" colspan=2> <input type="submit" name="ajouter" value="Ajouter"/> </td>
						</tr>
					</table> 
				</form>

			

		
		</section>
		
		
	</body>
</html>