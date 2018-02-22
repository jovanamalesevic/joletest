<html>
<head> <title> Primer sa operatorima </title>
<body>
<?php
$x=25;
$y=100;
$z=50;
$promenljiva=($x>$y) || ($y>$z);
echo $promenljiva;
// ovde se se vraca rezultat 1, jer je iskaz true
$promenljiva1=($x!==$y) && ($z<=$y) && ($y!==105);
echo $promenljiva1;
// ovde se ne vraca rezultat, jer je iskaz false
?>
<body>
</html>

<hr></hr>
<html>
<head> <title> Primer if – else uslovne naredbe </title> </head>
<body>
<?php
$promenljiva=45;
If($promenljiva>20) 
{
echo "Vrednost promenljive je veca od 20";
}
else 
{ 
echo "Vrednost promenljive je manja od 20";
}
?>
</body>
</html>

<hr></hr>
<?php
$logged_in = TRUE;
$user = "Admin";
$banner = ($logged_in!=TRUE)?"Welcome back $user!":"Please login." ;
echo "$banner";
?>

<hr></hr>
<html>
<head> <title> Primer elseif uslovne naredbe </title> </head>
<body>
<?php
$promenljiva=30;
If ($promenljiva<=30) {
echo "Broj je manji ili jednak 30";
}
elseif($promenljiva>30 && $promenljiva<=45) {
echo "Broj je veci od 30, a manji ili jednak 45";
}
else {
echo "Broj je veci od 45";
}
?>
</body>
</html>

<hr></hr>
<html>
<head> <title> Primer switch naredbe </title> </head>
<body>
<?php
$x=10;
switch($x) 
{
	case 1: 
	echo "Broj je 1";
	break;
	case 10:
	echo "Broj je 10";
	break;
	case 20:
	echo "Broj je 20";
	break;
	default:
	echo "Ne znam koji je broj";
}
?>
</body>
</html>

<hr></hr>
<?php
$int_var=5;
switch ($int_var){
case 0:
echo 'Broj je nula';
break;
case 5:
echo 'Broj je pet';
case 6:
echo 'Broj je 6';
break;
default:
echo 'Broj nije poznat';
}
?>
