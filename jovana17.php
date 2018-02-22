<html>
<head> <title> Primer za date() funkciju </title> </head>
<body>
<?php
echo date("Y/M/D");
echo "<br>";
echo date("D/M/Y");
echo "<br>";
echo date("D.M.Y");
?>
</body>
</html>

<hr>
<?php
  echo("Validating: 5/31/2005<br>");
  if (checkdate(5,31,2005)) {
    echo('Date accepted: ');
    $new_date=mktime(18,05,35,5,31,2005);
    echo date("r",$new_date);
  }
  else {
    echo ('Invalid date.');
  }
  echo("<br>");
?>

<hr>
<?php
class objekat2{
var $testna;
function ispisi(){
echo $this->testna;
}
}
// kreiranje instance objeka
$obj=new objekat2;
// nameštanje objektne varijable $testna
$obj->testna="Tekst koji je cuvan za ispis";
// pozivanje funkcije koja za ispis
$obj->ispisi();
?>


<hr>
<?php
class objekat{
var $testnas;
// konstruktor
function objekat(){
$this->testnas="Ovo je tekst koji smo stvorili konstruktorom<br>";
$this->ispisi();
}
function ispisi(){
echo $this->testnas;
}
}
// pozivanje objekta u kodu
$obj=new objekat;
// nameštanje objektne varijable $testna
$obj->testnas="Tekst koji je cuvan za ispis";
// pozivanje funkcije koja za ispis
$obj->ispisi();
?>

