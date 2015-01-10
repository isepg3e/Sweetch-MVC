<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Échange de logements | Sweetch</title>
	<link rel="stylesheet" href="CSS/logeBO.css"/>
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

$reponse = $bdd->query('SELECT * FROM loge ORDER BY id_loge ASC');
	echo '<section><br/><br/>';
	echo '<caption>Voici tous les logements de ton site de merde:</caption><br/><br/>';
	echo '<table>	<tr>
	<th>id membre</th>
	<th>code postal</th>
	<th>surface</th>
	<th>piece</th>
	<th>ville</th>
	<th>region</th>
	<th>supprimer</th>
	</tr></table>';
while ($donnees = $reponse->fetch())
{
	echo'<form method="POST" action="Modele/supp_POST.php">
	<table>
	<tr>
		<td>' . $donnees['id_membre'] . '</td>
		<td>' . $donnees['code_postal'] . '</td>
		<td>' . $donnees['surface'] . '</td>
		<td>' . $donnees['piece'] . '</td>
		<td>' . $donnees['ville'] . '</td>
		<td>' . $donnees['region'] . '</td>
		<td class="supprimer"><input type="hidden" name="test" value="'.$donnees['id_loge'].'"/><input type="submit" name="supprimer" value="supprimer"/></td>
	</tr>
	</table>';
	echo '</form>';

}
$reponse->closeCursor();
echo '</section><br/><br/><br/><br/>';
?>
<?php include("Vues/footer.php");?>
</body>
</html>
