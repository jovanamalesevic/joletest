<?php
setcookie("ime", "imekukija", time()+3600);
// postavljen je cookie cije je ime - ime, vrednost - imekukija i datum isteka 1 sat
?>
<?php
if (isset($_COOKIE['ime'])) {
// proverava da li je za ime - ime podesena neka vrednost u cookie - ju
echo "Dobrodosla" . " " . $_COOKIE['ime'];
}
else {
echo "Dobrodosao posetioce";
}
?>
<html>
<head> <title> Primer za Cookie </title> </head>
<body>
</body>
</html>

<hr>
<?php
$Month = 2592000 + time();
//this adds 30 days to the current time
setcookie(AboutVisit, date("F jS - g:i a"), $Month);
?>
<?php
if(isset($_COOKIE['AboutVisit']))
{
$last = $_COOKIE['AboutVisit'];
echo "Welcome back! <br> You last visited on ". $last;
}
else
{
echo "Welcome to our site!";
}
