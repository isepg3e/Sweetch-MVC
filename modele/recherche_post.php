<?php
$checkboxwifi=$_POST['checkbox_wifi'];
$checkboxtv=$_POST['checkbox_tv'];
$region=$_POST['region'];

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
	$requete = "";
	if( $checkboxwifi == 'true') {
			$requete = " WHERE  wifi = true ";
	}
	if( $checkboxtv == 'true') {
			if ( $requete == "") {
				$requete = " WHERE tv = true ";
			}
			else {
				$requete = $requete . " AND tv = true";
			}
	}
	if( $region != '0') {
			if ( $requete == "") {
				
				$requete = " WHERE region = '". $region . "' ";
			}
			else {
				$requete = $requete . " AND region = '". $region ."' ";
			}
	}


		// on peut aussi construit le where avec des conditions ... 
		//echo 'SELECT L.*, P.* FROM loge L INNER JOIN photo P ON (P.id_loge = L.id_loge) ' . $requete;
		$req = $bdd->query('SELECT L.*, P.* FROM loge L INNER JOIN photo P ON (P.id_loge = L.id_loge) ' . $requete );
		//$req = $bdd->query('SELECT L.*, P.* FROM loge L INNER JOIN photo P ON (P.id_loge = L.id_loge) WHERE region = $_POST["region"]');
		//$dateFormated = split('/', $_POST['age']);
		//$date = $dateFormated[2].'-'.$dateFormated[1].'-'.$dateFormated[0];
		//$req->execute(array('wifi' => true, 'tv' => false));
		
		while ($donnees = $req->fetch())
		{

			echo '<image src="Images/' . $donnees['chemin']  . '" />';
			echo $donnees['ville'];
			echo '<br />';
		}
	//echo print_r ($_POST);
	//echo "<br />";			
 //echo "SELECT L.*, P.* FROM loge L INNER JOIN photo P ON (P.id_loge = L.id_loge) WHERE region = '". $_POST['region'] ."' ";
		

$req->closeCursor();

?>
