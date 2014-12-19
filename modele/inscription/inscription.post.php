<?php 
function inscription()
{
	global $bdd;

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	$cmdp = $_POST['cmdp'];
	$email = $_POST['email'];
	$point = strpos($email,".");
	$aroba = strpos($email,"@");
	$checkbox = $_POST['checkbox'];

		// Insertion du formulaire dans la BDD à l'aide d'une requête préparée

	$req = $bdd->prepare('INSERT INTO membre(nom,prenom,age,email,mdp,CGU,pseudo) VALUES(?,?,?,?,?,?,?)');
	$dateFormated = split('/', $_POST['age']);
	$date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
	$req->execute(array($nom, $prenom, $date, $email, $mdp, $checkbox, $pseudo));
	$inscrit = $req->fetchAll();

	return $inscrit;
}