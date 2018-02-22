<?php
function counter1 () {
static $counter = 0;
++$counter;
echo $counter;
}
$counter = 21;
counter1();
echo $counter;
?>
