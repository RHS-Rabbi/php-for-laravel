<?php
// 01 --- Classes And Object
// Class definition

class BlogPost{
    public string $title;
    public string $content;
    public int $views = 0;
    public function getInfo(): string{
        return "{$this->title} ({$this->views} views)";
    }
}

// object make (Instantiation)

$post = new BlogPost();
$post->title = "PHP OOP Learn";
$post->content = "Detailed....";
$post->views = 250;

echo $post->getInfo(); // -> PHP OOP Learn (250 views)


?>