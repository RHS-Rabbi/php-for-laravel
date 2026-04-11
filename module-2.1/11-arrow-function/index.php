<?php 

// Arrow Function -- PHP 7.4+
$double = fn(int $n) => $n + 2;
// closure এর চেয়ে ছোট সিনট্যাক্স

//  use লাগে না - বাইরের var auto-capture 

$tax = 0.15;

$withTAx = fn($price) => $price * (1 + $tax);
echo $withTAx(100); // 115

// array_map + array function

$prices = [100, 200, 300];
$withTaxAll = array_map(fn($p) => $p * 1.15, $prices);
//  -> [115, 230, 345]

// collection + fn - সব চেয়ে বেশি ব্যাবহার
$published = $posts
    ->filter(fn($p) => $p->is_published)
    ->map(fn($p) => $p->title)
    ->values();


?>