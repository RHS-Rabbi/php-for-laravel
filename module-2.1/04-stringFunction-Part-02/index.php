<?php 

// String Functions -- Part2

$s = "Learning Laravel with PHP";

$type1 = substr( $s, 0, 9 );

echo $type1 . "<br/>"; // Learning


$type2 = substr( $s, -4 ); 

echo $type2 . "<br/>"; // PHP


$type2 = substr( $s, -4 ); 

echo $type2 . "<br/>"; // PHP


$type3 = strpos( $s, 'Laravel' ); 

echo $type3 . "<br/>"; // 9

// explode - string কে array- তে ভাঙে।
$tags = explode(",", 'php,laravel,mysql');
var_dump($tags); // [php, laravel, 'mysql]
echo '<br/>';


$tags = implode(" | ", $tags);


echo $tags . '<br/>'; // php | laravel | 

$bio = sprintf( "Name: %s, Age: %d,", "Rabbi", 25 );

echo $bio . '<br/>'; // Name: Rabbi, Age: 25,

$number =  number_format( 1234567.89,2 );

echo $number; // 1234567.89,2







?>