/*  
<?php
$user_input= 2;
if (gettype ($user_input) == "integer") {
$age = $user_input;
}
echo $age;
?>

<?php
$a = 7.99; 
settype($a, "integer"); 
echo $a;
?>

<?php
$ProductID = "432BB";
if (isset($ProductID)) {
echo("This will print");
}
unset($ProductID);
if (isset ($ProductID)) {
echo("This will NOT print");
}
?>

<?php
$ProductID = "432BB";
if (is_int($ProductID)) {
echo ("String");
}
?>

<?php
$position = "m";
function change_pos() 
{
$position = "b";
echo ("$position"); 
}
change_pos();
echo ("$position"); 
?>
*/


<?php
$position = "m";
function change_pos() {
global $position;
$position = "b";
}
change_pos();
echo ("$position");
?>



