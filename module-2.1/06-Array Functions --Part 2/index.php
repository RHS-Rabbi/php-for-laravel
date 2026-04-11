<?php 

/* Array Functions -- Part 2 */

// laravel collection এ array কাজ

$posts = collect([
    ['title' => 'PHP learn', 'views' => 500],
    ['title' => 'Laravel', 'views' => 900],
    ['title' => 'MySQL', 'views' => 300],
]);

// pluck - নিদিষ্ট field এর values নাও
$posts->pluck("title");
// ['PHP learn', 'Laravel', 'MySQL']

// chunk - ছোট ছোট অংশে ভাগ করে।
$posts->chunk(2);
// [[post1, post2], [post2]]

$posts->sortbyDesc("views")->take(2);
// সর্বোচ্চ views এর ২টি post


array_chunk([1,2,3,4,5], 2);
// -> [[1,2], [3,4], [5]]

$a = ['php', 'laravel'];
$b = ['mysql', 'redis'];
array_merge($a, $b); // -> ['php', 'laravel','mysql', 'redis' ]

$t = ['php', 'php', 'laravel'];
array_unique($t); // -> ['php', 'laravel']


?>