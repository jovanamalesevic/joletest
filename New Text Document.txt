<html>
<head> <title> Primer za personalizovani error handler(3) </title> <head>
<body>
<?php
function personalizovanaGreska($errno,$errstr) 
{
	echo "<b> Greska </b> [$errno] $errstr";
	echo "Kraj skripte";
	die();
}
set_error_handler("personalizovanaGreska",E_USER_WARNING);
// okidanje greske
$test=2;
if($test>1){
	trigger_error("vrednost mora biti veca od 1", E_USER_WARNING);
}
?>
</body>
</html>
