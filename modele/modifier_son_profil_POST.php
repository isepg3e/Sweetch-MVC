<?php
session_start();
$idmembre=$_SESSION['id_membre'];
$mdp=$_SESSION['mdp'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$pseudo=$_POST['pseudo'];
$Apass=$_POST['Apass'];
$Npass=$_POST['Npass'];
try
{
$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}
// Vérifier la connexion.
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

	if(empty($nom) OR empty($prenom) OR empty($pseudo)  OR empty($Apass) OR empty($Npass))
		{
			echo 'remplissez toutes les cases.';
		}
	elseif($mdp != $Apass)
		{
			echo'l\' ancien mot de passe PAS valide.';
		}
	else
		{
			$req = $bdd->prepare('UPDATE membre SET nom = :nvnom, prenom = :nvprenom, pseudo = :nvpseudo, mdp = :nvNpass 
                                    WHERE id_membre = :idmembre');
            $req->execute(array(
							'nvnom' => $_POST['nom'], 
							'nvprenom' => $_POST['prenom'], 
							'nvpseudo' => $_POST['pseudo'], 
						//	'age' => $_POST['age'], 
							'nvNpass' => $_POST['Npass'],                                                        
							'idmembre' => $idmembre
							));
                $req->closeCursor();
                	session_start();
					$_SESSION['id_membre'] = $resultat['id_membre'];
					$_SESSION['mdp'] = $resultat['mdp'];
					$_SESSION['pseudo'] = $pseudo;
			 echo 'modif=OK';
			
		}
?>
