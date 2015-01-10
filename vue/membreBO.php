<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Échange de logements | Sweetch</title>
	<link rel="stylesheet" href="CSS/membreBO.css"/>
	<link rel="stylesheet" href="CSS/header.css"/>
	<link rel="stylesheet" href="CSS/footer.css"/>
	<link rel="stylesheet" href="CSS/general.css"/>
</head>

<body>
	<?php include("Vues/headeradmin.php"); ?>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
	echo '<section><br/><br/>';
	echo '<caption>Voici tous les membres de ton site de merde: <a href="Vues/inscriptionBO.php" style="float:right;">Ajouter un membre  </a> </caption><br/><br/>';
	echo '<table>	<tr>
	<th>nom</th>
	<th>prenom</th>
	<th>pseudo</th>
	<th>age</th>
	<th>email</th>
	<th>role</th>
	<th>supprimer</th>
	<th>modifier</th>
	</tr></table>';
$reponse = $bdd->query('SELECT * FROM membre ORDER BY nom ASC');
while ($donnees = $reponse->fetch())

{
	echo'<form method="POST" action="Modele/membreBO.php">
	<table>
	<tr>
		<td>' . $donnees['nom'] . '</td>
		<td>' . $donnees['prenom'] . '</td>
		<td>' . $donnees['pseudo'] . '</td>
		<td>' . $donnees['age'] . '</td>
		<td>' . $donnees['email'] . '</td>
		<td>' . $donnees['role'] . '</td>
		<td class="supprimer"><input type="hidden" name="test" value="'.$donnees['id_membre'].'"/><input type="submit" name="supprimer" value="supprimer"/></td>
		<td class="modifier"><input type="hidden" name="test" value="'.$donnees['id_membre'].'"/><input class="input" type="text" name="role" placeholder="0 ou 1"/><input type="submit" name="modifier" value="modifier"/></td>
	</tr>
	</table>
	</form>';
}
$reponse->closeCursor();
echo '</section><br/><br/><br/><br/>';
?>
<?php include("Vues/footer.php");?>
</body>
</html>
