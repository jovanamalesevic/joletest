<html>
<head> <title> Primer za fopen() </title> </head>
<body>
<?php
$fajl=fopen("proba.txt", "r") or exit ("Ne mogu da otvorim fajl");
// otvara se fajl proba.txt u modu r(read)
while (!feof($fajl)){
// dok se ne dodje do kraja fajla, izvrsava se kod u viticastim zagradama
echo fgets($fajl) . "<br>";
}
fclose($fajl);
?>
</body>
</html>

