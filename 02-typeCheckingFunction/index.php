<?php 
// type checking funtion

$type1 = 'Hello';
echo gettype($type1) . '<br/>'; // true
echo is_string($type1) . '<br/>'; // true

$type2 = 42;
echo is_int($type2) . '<br/>'; // true

$type3 = 3.14;

echo is_float( $type3 ) . '<br/>';  // true

$type4 = true;

echo is_bool($type4) . '<br/>'; // true

$type5 = null;

echo is_null($type5) . '<br/>'; // true

$type6 = [1,2];

echo is_array($type6) . '<br/>'; // true

$type7 = "42";

echo is_numeric($type7);  // true




?>