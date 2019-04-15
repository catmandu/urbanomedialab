<?php
session_start();
require_once("langManager.php");
?>

<!DOCTYPE html>
<html>
<head>
 <title><?=TITLE?></title>
</head>
<body>

<h1><?=WELCOME_TXT?></h1>
<form action="index.php">
  <select name="selLang">
    <option value=""><?=CHOOSE_TXT?></option>
    <option value="en">English</option>
	<option value="ja">Japanese</option>
	<option value="es">Espa&ntilde;ol</option>
	<option value="de">Alem&aacute;n</option>
  </select>
  <input type="submit" value="<?=CHANGE_LANGUAGE?>"/>
</form>
</body>
</html>