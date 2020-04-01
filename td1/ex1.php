<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello</title>
</head>
<body>
	<a href="/td/tp1/ex1.php?message=Hello">Afficher Hello</a>
	<?php
	echo "Vous êtes sur la page n°".$_GET["message"];
	?>
</body>
</html>
