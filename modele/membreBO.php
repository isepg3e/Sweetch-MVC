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
		$req = $bdd->query("DELETE FROM membre WHERE id_membre=".$_POST['test']);
		echo '<meta http-equiv="refresh" content="0; url=http://localhost/coursphp/index.php?page=membreBO"/>';
	}
	if(isset($_POST['modifier']))
	{
			$req = $bdd->prepare("UPDATE membre SET role = :nvrole WHERE id_membre =".$_POST['test']);
			 $req->execute(array('nvrole' => $_POST['role']));
			 $req->closeCursor();
		echo '<meta http-equiv="refresh" content="0; url=http://localhost/coursphp/index.php?page=membreBO"/>';
	}
?>
