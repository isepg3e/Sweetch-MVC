<?php

// Requête
include_once('modele/inscription/inscription.post.php');
$inscrit = inscription();

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage

if (isset($nom) && isset($prenom) && isset($pseudo) && isset($mdp) && isset($cmdp) && isset($email) && isset($checkbox) && isset($_POST['age'])) // Cas où le formulaire est entierement rempli
{ // vérification du formulaire
	if($mdp != $cmdp)
	{
		header('Location: localhost:8888/vue/inscription/index.php?erreur=mdp');
	}
	elseif(empty($checkbox))
	{
		header('Location: localhost:8888/vue/inscription/index.php?erreur=cgu');
	}
	if($point == '' OR $aroba == '')
	{
		header('Location: localhost:8888/vue/inscription/index.php?erreur=mail');
	}
}
elseif (empty($nom) && empty($prenom) && empty($email) && empty($mdp) && empty($pseudo) && empty($con) && empty($_POST['age'])) 
{
	// Dans le cas où le formulaire n'a pas été touché, on n'affiche rien.
}
else (empty($nom) OR empty($prenom) OR empty($email) OR empty($mdp) OR empty($pseudo) OR empty($con) OR empty($_POST['age']))
{
	echo 'Remplissez le formulaire.';
}






foreach($billets as $cle => $billet)
{
    $billets[$cle]['nom'] = htmlspecialchars($billet['nom']);
    $billets[$cle]['possesseur'] = nl2br(htmlspecialchars($billet['possesseur']));
}

// On affiche la page (vue)
include_once('vue/blog/index.php');