<?php
	session_start();

/*
si la variable de session id_membre n'existe pas cela siginifie que le visiteur
n'a pas de session ouverte, il n'est donc pas logué ni autorisé à
acceder à l'espace membres (profile & publication d'annonce)
*/
if(!isset($_SESSION['id_membre'])) {
	header('Location: index.php?page=connexion'); 
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="CSS/header.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/general.css"/>
		<link rel="stylesheet" href="CSS/profile.css"/>
		<link rel="shortcut icon" href="Images/icon-sweetch.png"/>
		<title>Profil | Sweetch</title>
		<script type="text/javascript"> function deco(){
										alert ("Vous êtes déconnecté.");
									}
		</script>
	</head>

	<body>
		<section>
			<table>
				
				<tr>
					<td class="case titre" >Salut <?php echo $_SESSION['pseudo'] . ' !'; ?> </td>
				</tr>
				<tr>
					<td class="case profil" ><a href="index.php?page=modifierprofil">Voir / Modifier votre profil</a></td>
				</tr>
				<tr>
					<td class="case gestion" ><a href="index.php?page=gerer_annonce">Gérer vos annonces</a></td>
				</tr>
				<tr>
					<td class="case deconnexion" ><a href="Modele/deconnexion.php" onclick="deco()">Se déconnecter</a></td>
				</tr>
			</table>	
		</section>
	</body>
</html>

<!--$_SESSION = array();
session_destroy(); -->
