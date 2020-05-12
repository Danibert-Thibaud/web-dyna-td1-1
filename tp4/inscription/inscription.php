

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
</head>
<body>
	<form method="post" action="../do/inscription.php">
		<label for="pseudo">Nom ou pseudo </label> <br>
		<input type="text" name="Pseudo" id="pseudo" placeholder="Pseudo" size="25" maxlength="20" required="">
		<label for="mail">Votre mail : </label><br>
		<input type="email" name="mail" id="mail" size="40" placeholder="Ex : exemple@gmail.com"><br><br>
		<input type="submit" value="Valider l'inscription">
	</form>
</body>
</html>