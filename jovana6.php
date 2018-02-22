<html>
<head> <title> Primer postavljanja promenljivih </title> </head>
<body>
<?php
$prva=16; 
$druga="Zdravo narode! ";
define("kompanija","JOLE");
echo $prva , " " , $druga;
echo kompanija;
/* u echo naredbi koristi se " " , da bi se odvojilo prikazivanje promenljivih, tj. da se ne bi na browseru  ispisalo 16Zdravo narode!, vec 16 Zdravo narode! */
?>
</body>
</html>
