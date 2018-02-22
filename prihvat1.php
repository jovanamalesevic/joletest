<html>
<head>
<title>Primer 2 b) : Prihvatanje podataka POST metode</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
if(isset($_POST["ime"])){
echo "Pozdrav " . $_POST["ime"];
} else {
echo "Niste prosledili parametar";
}
?>
</body>
</html>

