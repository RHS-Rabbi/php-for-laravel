<?php 

// String Functions -- Part1

$str = '   Hello, Laravel!  ';

$type1 = strlen($str);

echo $type1 . '<br/>'; // 20


$type2 = strtolower($str);

echo $type2 . '<br/>'; // hello, laravel!


$type3 = strtoupper($str);

echo $type3 . '<br/>'; // HELLO, LARAVEL!

$type4 = trim($str);

echo $type4 . '<br/>'; // Hello, laravel!


$type5 = ltrim($str);

echo $type5 . '<br/>'; // Hello, laravel!

$type6 = rtrim($str);

echo $type6 . '<br/>'; //   Hello, laravel!


$type7 = str_replace( "Laravel", "PHP", $str );

echo $type7 . '<br/>'; // Hello, PHP!

$type8 = str_contains( $str, "Laravel" );

echo $type8 . '<br/>'; // true


$type9 = str_starts_with( $str, "   H" );

echo $type9 . '<br/>'; // true

$type10 = str_ends_with( $str, "!  " );

echo $type10 . '<br/>'; // true



?>