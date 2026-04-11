<?php
// 09-loops-foreach-for-while-do-while

$posts = ['PHP', 'Laravel', 'MYSQL'];

// foreach - সবচেয়ে বেশি ব্যবহৃত
foreach( $posts as $key => $post ){
    echo "$key: $post\n";
}

// for - নিদিষ্ট সংখ্যকবার
for ($i = 0; $i < 5; $i++){
    echo $i; // 0 1 2 3 4
}

// while - condtion সত্য হওয়া পর্যন্ত 
$page = 1;
while ($page <= 3){
    fetchPage($page); $page++;

}
break; // loop off
continue;  // পরের iteration - এ যাও

// blade template
@foreach($posts as $post)
    <div>{{ $post-> title }}<div/>
@endforeach

@forelse($posts as $post)
    <div>{{ $post-> title }}<div/>
@empty
    <p>No Posts Found</p>
@endforelse

?>