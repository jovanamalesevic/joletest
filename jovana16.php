<?php
$str_ime="Internet tehnologije";
echo ("Moje ime je $str_ime");
?>

<?php
$str_ime="Internet tehnologije";
echo ('Moje ime je $str_ime');
?>

<?php
$str_glavni=" \tOvo je string \nsa puno praznog prostora \n";
echo "<pre>$str_glavni</pre>";
// izbacivanje praznog prostora sa pocetka stringa
$str_bez_pocetka=ltrim($str_glavni);
echo "<hr>\n";
echo "<h4>String bez praznog prostora na pocetku stringa</h4>\n";
echo "<pre>$str_bez_pocetka</pre>\n";
// izbacivanje praznog prostora sa kraja stringa
$str_bez_kraja=rtrim($str_glavni);
echo "<hr>\n";
echo "<h4>String bez praznog prostora na kraju stringa</h4>\n";
echo "<pre>$str_bez_kraja</pre>\n";
// izbacivanje praznog prostora iz celog stringa
$str_bez_praznina=trim($str_glavni);
echo "<hr>\n";
echo "<h4>String bez praznog prostora na kraju i pocetku stringa</h4>\n";
echo "<pre>$str_bez_praznina</pre>\n";
?>

<hr>
<?php
  $password="secretpassword1";

  if (strstr($password,"password")){
    echo('Passwords cannot contain the word "password".');
  }
  else {
    echo ("Password accepted.");
  }
?>

<hr>
<h3>Ispisivanje pozicije pronadjenog stringa ili znaka unutar zadatog stringa</h3>
<?php
$string="Internet tehnologije je veoma ineresantan predmet";
$trazeni="je";
// ispisivanje pozicije prvog nalazenja trazenog strina unutar zadatog stringa
$int_pozicija=strpos($string,$trazeni);
echo $int_pozicija;
?>
<hr>
<h3>Ukupan broj pojavljivanja traženog znaka ili stringa</h3>
<?php
// racunanje broja pojavljivanja nekog stringa ili znaka unutar stringa
$suma=substr_count($string,$trazeni);
echo "Broj pojavljivanja :$suma";
?>

<hr>
<?php
  $password="secret1";

  if (strlen($password) <= 5)
  {
    echo("Passwords must be a least 5 characters long.");
  }
  else {
    echo ("Password accepted.");
  }
?>


<hr>
<html>
<head> <title> Primer strpos funkcije </title> </head>
<body>
<?php
$promenljiva="Internet tehnologije";
echo strpos($promenljiva,"tehn");
?>
</body>
</html>

<hr>
<?php
$string="Ovo je string koji cemo izrezati na više delova";
// rezanje stringa
$arr_izrezani=explode(" ",$string);
foreach($arr_izrezani as $kljuc => $vrednost){
echo $kljuc . " => " . $vrednost . "<br>\n";
}
?><hr><?php
// lepljenje stringa iz niza
$arr_stringovi=array("Ovo","je","string","koji","cemo","zalepiti");
$zalepljeni=implode(" ",$arr_stringovi);
echo $zalepljeni;
?>

<hr>
<?php 
$email='neko@negde.com';
$arr_fragemnti=explode('@',$email);
echo 'nick : ' . $arr_fragemnti[0]; // ispisivanje imena iz e-mail adrese
echo 'domena : ' . $arr_fragemnti[1]; // ispisivanje domena e-mail adrese
?>

<hr>
<html>
<head> <title> Primer za for petlju </title> </head>
<body>
<?php
$my_string = <<<TEST
Tizag.com
Webmaster Tutorials
Unlock your potential!
TEST;
echo $my_string;
?>
</body>
</html

<hr>
<?php
$name1 = "Bill";
$name2 = "BILL";
$result = strcasecmp($name1, $name2);
if (!$result){
   echo "They match.";
}
?>


