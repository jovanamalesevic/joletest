<?php
// druga.php
session_start();
$_SESSION["ukupaniznos"]=$_SESSION["ukupaniznos"] + 5;
print $_SESSION["ukupaniznos"];
?>
