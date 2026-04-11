<?php 
/* Array Functions -- Part 1 */


$nums = [1, 2, 3, 4, 5, 6];

//  array_map - প্রতিটি item-এ function apply করে।
$type1 = array_map( fn($n) => $n * 2, $nums );

var_dump( $type1 ); // [2,4,,6,8,10,12]
echo '<br/>';

// array_filter -- condition মতো filter করো।
$type2 = array_filter( $nums, fn($n) => $n % 2 ===  0 );
var_dump( $type2 ); // [2,4,6]

echo '<br/>';

// array_reduce - সব মিলিয়ে একটি value বানাও।
$type3 = array_reduce( $nums, fn($carry, $item) => $carry + $item, 0 );

echo $type3 . '<br/>'; // 21


$arr = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// array_values() array থেকে keys সরিয়ে দেয় এবং শুধু values গুলোকে 0 থেকে শুরু করে নতুন করে ইন্ডেক্স করে। এটি array কে "রিসেট" করে।
$type4 =  array_values($arr);

print_r($type4); 

echo'<br/>';
//array_keys() একটি array থেকে শুধুমাত্র keys গুলো নিয়ে নতুন array তৈরি করে।
$type5 = array_keys($arr);

print_r($type5); 

echo'<br/>';
?>