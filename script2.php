<?php 
$maxLength = 3;
$charSet = 'abcdefghijklmnopqrstuvwxyz123456789';
$size = strlen($charSet);
$base = array();
$counter = 0;
$baseSize = 1;
// Let's see how many combinations exist for the given length and charset
$combinations = 0;

for($i=1;$i<=$maxLength;$i++) {
	$combinations += pow($size,$i);
} 

echo "Il y a $combinations possible";

?>
