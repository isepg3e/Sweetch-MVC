<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$service=$_POST['service'];
$servicecheck=$_POST['servicecheck'];
$req = $bdd->prepare('INSERT INTO service(nom_service, type) VALUES(?,?)');
$req->execute(array($service,$servicecheck));
echo 'service ajoute <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/index.php?page=serviceBO"/>';
?>
