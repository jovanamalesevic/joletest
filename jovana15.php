<html>
<head> <title> Primer numerickih nizova </title> </head>
<body>
<?php
$niz=array("Internet tehnologije ", "Simulacija " ,"Elektronsko poslovanje ");
echo $niz[0] . " " ." i" . " " . $niz[1] . " " . "i" ." " . $niz[2] . "su najbolji predmeti";
?>
</body>
</html>

<hr></hr>
<html>
<head> <title> Primer asocijativnih nizova </title> </head>
<body>
<?php
$niz=array("jabuka"=>"crvena","kruska"=>"zuta","tresnja"=>"crvena","pomorandza"=>"narandzasta");
echo $niz["jabuka"];
// rezultat ce biti crvena
echo "<br>";
// prelazak u novi red uz pomoc HTML koda
echo $niz["pomorandza"];
// rezultat ce biti narandzasta
?>
</body>
</html>

<hr></hr>
<html>
<head> <title> Primer multidimenzionih nizova </title> </head>
<body>
<?php
$porodice=array 
(
"Jovanovic"=>array
(
"Marko",
"Pedja",
"Marina"
),
"Petrovic"=>array
(
"Milena",
"Marko",
"Jovana"
),
"Stankovic"=>array
(
"Petar",
"Jasmina",
"Milica",
"Isidora"
)
);
echo $porodice["Jovanovic"][1] . " " . "je clan porodice Jovanovic";
// ispisace se da je Pedja clan porodice Jovanovic
?>
</body>
</html>

<hr></hr>
<?php
$arr_valute=array("USD","EUR","GBP","HRK");
foreach ($arr_valute as $kljuc=>$jole)
echo "[$kljuc] => $jole <br>";
?>

<hr></hr>
<?php
$arr_niz=array(
0=>10,
1=>15,
2=>9,
3=>19,
4=>13,
5=>15,
6=>99,
7=>74
);
// sortiranje niza
asort($arr_niz);
print_r($arr_niz);
?><hr><?php
arsort($arr_niz);
print_r($arr_niz);
?><hr><?php
ksort($arr_niz);
print_r($arr_niz);
?><hr><?php
krsort($arr_niz);
print_r($arr_niz);
?>
