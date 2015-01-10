<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="stylesheet" href="CSS/profile.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>
		<title>Back-office | Sweetch</title>
	</head>

	<body>
		<?php include("Vues/headeradmin.php"); ?>
		<section>
			<table>
				<tr>
					<td class="case profil" ><a href="index.php?page=membreBO">Gérer les utilisateurs</a></td>
				</tr>
				<tr>
					<td class="case gestion" ><a href="index.php?page=logeBO">Gérer les logements</a></td>
				</tr>
				<tr>
					<td class="case deconnexion" ><a href="index.php?page=serviceBO">Rajouter services / contraintes</a></td>
				</tr>
			</table>	
		</section>
		<?php include("Vues/footer.php");?>
	</body>
</html>
