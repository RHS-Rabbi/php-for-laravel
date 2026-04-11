<?php 
// if-elseif-switch-match

$score = 75;
if ($score >= 80){
    echo "A";
} elseif($score >= 60){
    echo "B";

} else{
    echo "C";
}
// -> B


// switch - loose (==) comparison 
$role = "admin";

switch($role){
    case "admin": echo "All Access"; break;
    case "editor": echo "Post edit"; break;
    default: echo "Only Reading";
}

// match - strict (===), PHP 8.0+

$label = match ($role){
    "admin" => "Super user",
    "editor" => "Editor",
    default => "Basic User"
};

// laravel blade
$color = match($status){
    'active' => 'green',
    'pending' => 'yellow',
    default => 'grey'
}

?>