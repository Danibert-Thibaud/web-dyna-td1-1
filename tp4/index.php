<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tp_noté;charset=utf8', 'root', 'Ayfant@n0cxx');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscriptions_Controller</title>
</head>
<body>
		<h1>Bienvenue !</h1><br>
		Cette application vous permet de vous inscrire à notre procain flashmob.
		<form>
			<input type="submit" value="Inscription">
		</form>
</body>
</html>