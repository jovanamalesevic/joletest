<?php
function povecaj(&$broj,$vrednost){
$broj+=$vrednost;
}
$neki_broj=12;
povecaj($neki_broj,10);
echo $neki_broj;
?>
