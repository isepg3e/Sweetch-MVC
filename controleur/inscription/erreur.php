<?php 

if ($_GET['erreur'] == 'mdp')
{
?>
	<p>Les deux mots de passe que vous avez rentrés ne correspondent pas.</p>
<?php
}
elseif ($_GET['erreur'] == 'cgu') 
{
?>
	<p>Cochez les CGU.</p>
<?php 
}
elseif ($_GET['erreur'] == 'mail')
{
?>
	<p>Votre email n'est pas valide.</p>
<?php
}
elseif (condition) {
	# code...
}

?>