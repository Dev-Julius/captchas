<?php

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";

?>
<form method="post" action="script-captchas.php">
	<label for="cap">Saisir le captchats: </label>
    <input type="text" name="cap" id="cap">
	<input type="submit">
	<?php
	if (isset($_POST['submit']))
		{
			
		}
		
	?>
</form>