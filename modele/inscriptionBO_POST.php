<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$pseudo=$_POST['pseudo'];
$mdp=sha1($_POST['mdp']);
$con=sha1($_POST['cmdp']);
$email = $_POST['email'];
$point = strpos($email,".");
$aroba = strpos($email,"@");
// D'abord, je me connecte à la base de données!!!
try
{
$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}

// Vérifier la connexion.
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
	
	if(empty($nom) OR empty($prenom) OR empty($email) OR empty($mdp) OR empty($pseudo) OR empty($con) OR empty($_POST['age']))
	{
		echo 'remplissez toutes les cases, branleur!!! <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/Vues/inscriptionBO.php"/>';
	}
	elseif($mdp != $con)
	{
		echo 'les mots de passe ne correspondent pas <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/Vues/inscriptionBO.php"/>';
	}
	elseif($point=='' OR $aroba=='')
	{
		echo 'Votre email n est pas valide, arnaqueur <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/Vues/inscriptionBO.php"/>';
	}
	else
	{
		// Insertion du formulaire dans la BDD à l'aide d'une requête préparée
	
		$req = $bdd->prepare('INSERT INTO membre(nom, prenom,age,email,mdp,pseudo) VALUES(?,?,?,?,?,?)');
		$dateFormated = split('/', $_POST['age']);
		$date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
		$req->execute(array($nom, $prenom, $date, $email, $mdp, $pseudo));

			
		echo 'Votre membre a ete ajoute <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/index.php?page=membreBO"/>';
	} 

?>
