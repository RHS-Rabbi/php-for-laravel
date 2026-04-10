<?php
// 01-variable-typeCasting-dataType

$name = 'Nayemur Rahman'; // string
$age = 25; // int
$price = 99.99; // float
$active = true; // bool
$data = null; // null
$tags = ['php', 'laravel']; // array

// type casting
(int) '42';   // 42
(float) '3.14';  // 3.14
(string) 100; // '100'
(bool) 0; // false
(array) "Hello";  // ["Hello"]


?>