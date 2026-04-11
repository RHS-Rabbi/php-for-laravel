<?php 

// Named Function

function formateTitle(string $title, int $limit = 50) : string{
    return $str::limit(strtoupper($title), $limit);
}

// anonymous Function (Closure)

$double = function(int $n): int{
    return $n * 2;
};

echo $double(5); // 10

// use - বাইরের variable capture করা
$prefix = "ব্লগ: ";

$addprefix = function($title) use ($prefix){
    return $prefix . $title;
};
echo $addprefix("PHP"); // -> ব্লগ: PHP

// deafult parameter
function greet(string $name, string $lang ='bn' ): string{
    return "Hello, $name";
}
greet('Rabbi') // কাজ করে।

?>