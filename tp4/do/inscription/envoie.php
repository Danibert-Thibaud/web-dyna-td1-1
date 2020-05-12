<?php 
	setcookie('inscription', $_POST['pseudo'], $_POST['mail'], time() + 365*24*3600, null, null, false, true);
?>