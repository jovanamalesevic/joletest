<?php
session_start();
?>
<html>
<head> <title> Primer za $_SESSION() promenljivu </title> </head>
<body>
<?php
if (isset($_SESSION['v'])) {
	$_SESSION['v'] = $_SESSION['v'] + 1;
}
else {
	$_SESSION['v']=1;
}
echo "Stranica je pregledana" . " " . $_SESSION['v'] . " " . "puta";
?>
</body>
</html>

<hr>
<?php
session_start();

if(isset($_COOKIE['PHPSESSID']))
        {
        echo 'The session ID has been store in a cookie';
        }
if (defined(SID))
        {
        echo 'The session ID has been stored in the query string';
        }
?>


<hr>
<?php 
session_start(); 
if ($_SESSION['login'] != "go" ) { 
header("Location: loginPage.php"); 
exit(); 
} 
else
if ($_SESSION['login'] = "go" )
{
//Prikaži sadržaj stranice
}
?> 


<hr>
<html>
<head> <title> Primer za error handling - funkcija die() </title> </head>
<body> 
<?php
if (!file_exists("dobrodosli.txt")) {
	die ("Fajl dobrodosli.txt ne postoji na Vasem file sistemu");
}
else {
	$fajl=fopen("dobrodosli.txt", "r");
}
?>
</body>
</html>
