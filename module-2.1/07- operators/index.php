<?php 

// Ternary Operators

$age = 20; 
$status = $age >= 18 ? 'adult' : 'minor'; // -> "adult"


// null coalescing (??) - PHP 7.0+

$name = $request->name ?? 'Guest';
$user = Auth::user() ?? abort(403);

// null coalescing assignment (??=) - php 7.4+
$config['debug'] ??= false;

// spaceship operator (<=>) - php 7.0+
1 <=> 2; // -1 (বাম ছোট)
2 <=> 2; // 0 সমান
3 <=> 2; // 1 (বাম বড়)

// usort এ spaceship ব্যাবহার
usort($posts, fn($a, $b) => $a->views <=> $b->views);
?>