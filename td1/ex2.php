<!DOCTYPE html>
<html>
<head>
	<title>ex2</title>
</head>
<body>
	<form method="GET">
   	 <label for="sizer">size: </label>
   	 <input type="number" value="15" name="sizer" id="sizer">
		 <label for="sizeg">size for green: </label>
		 <input type="number" value="30" name="sizeg" id="sizeg">
		 <label for="sizeg">size for green: </label>
		 <input type="number" value="50" name="sizeb" id="sizeb">
		 <input type="submit" value="Valider">
	</form>

	<?php
	$size= $_GET['sizer'];
	$sizeg= $_GET['sizeg'];
	$sizeb= $_GET['sizeb'];
	echo "<div style='font-size: {$size}px; color:#FF0000;'>Message de taille $size px en rouge</div>";
	echo "<div style='font-size: {$sizeg}px; color:green;'>Message de taille $sizeg px en vert</div>";
	echo "<div style='font-size: {$sizeb}px; color:blue;'>Message de taille $sizeb px en bleu</div>";
	if (empty($size)) {echo "Vous navez pas entré de valeurs"}
	?>
</body>
</html>
