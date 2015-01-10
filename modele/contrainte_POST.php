<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sweetch', 'root', 'kilo');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$contrainte=$_POST['contrainte'];
$contraintecheck=$_POST['contraintecheck'];
$req = $bdd->prepare('INSERT INTO contrainte(nom_contrainte, type) VALUES(?,?)');
$req->execute(array($contrainte,$contraintecheck));
echo 'cest bien rajoute <meta http-equiv="refresh" content="1; url=http://localhost/coursphp/index.php?page=serviceBO"/>';
?>
