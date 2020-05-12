<?php 
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=tp_noté;charset=utf8', 'root', 'Ayfant@n0cxx');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$chat=$bdd->query('SELECT nom, email, dateHeure FROM inscription'); //On cherche les messages avec le pseudo

	while ($donnees = $chat->fetch())
	{
		echo '<p>' .htmlspecialchars($donnees['nom']). '</p>';
		echo '<p>' .htmlspecialchars($donnees['email']). '</p>';
		echo '<p>' .htmlspecialchars($donnees['dateHeure']). '</p>';
	}

	$chat->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscrits flashmob</title>
</head>
<body>
	<form method="post" action="../index.php">
		<input type="submit" value="Retour à l'accueil">
	</form>
</body>
</html>