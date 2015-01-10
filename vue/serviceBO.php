<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>
		<title>Back-office | Sweetch</title>
	</head>

	<body>
<?php include("Vues/headeradmin.php"); ?>
		<section>
			
			<form method="POST" action="Modele/service_POST.php">
				<table>
					<tr>
						<td id="title" colspan=2>Ajouter des contraintes ou services</td>
					</tr>
					<tr>
						<td class="content"><label for="text" class="label">Ajouter service :</label></td>
						<td class="content"><input class="saisie" id="text" type="text" name="service" placeholder="---"/></td>
					</tr>
					<tr>
						<td class="content"><label for="text" class="label">Ajouter checkbox :</label></td>
						<td class="content"><input class="saisie" id="text" type="text" name="servicecheck" placeholder="---"/></td>
					</tr>

					<tr>
						<td class="content" colspan=2> <input type="submit" value="Ajouter"/></td>
					</tr>
				</table>
			</form>
						<form method="POST" action="Modele/contrainte_POST.php" >
				<table>
					<tr>
						<td class="content"><label for="text" class="label">Ajouter contrainte :</label></td>
						<td class="content"><input class="saisie" id="text" type="text" name="contrainte" placeholder="---"/></td>
					</tr>
					<tr>
						<td class="content"><label for="text" class="label">Ajouter checkbox :</label></td>
						<td class="content"><input class="saisie" id="text" type="text" name="contraintecheck" placeholder="---"/></td>
					</tr>

					<tr>
						<td class="content" colspan=2> <input type="submit" value="Ajouter"/></td>
					</tr>
				</table>
			</form>
		</section>
		<?php include("Vues/footer.php");?>
	</body>
</html>
