<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

	
	if(isset($_POST['supprimer'])) 
	{
		$req = $bdd->query("DELETE FROM loge WHERE id_loge=".$_POST['test']);
		echo '<meta http-equiv="refresh" content="0; url=http://localhost/coursphp/index.php?page=logeBO"/>';
	}

?>
