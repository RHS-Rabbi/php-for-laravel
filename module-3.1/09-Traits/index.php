<?php 
// 09-Traits
// Trait -- reusable ccode block

trait HasSlug {
    public function generateSlug( string $title ){
        return Str::slug($title);
    }

}

trait HasTimestamps{
    public Carbon $createdAt;
    public function touch(): void {
        $this->createdAt = now();
    }
}

// একাধিক trait একসাথে use করা
class BlogPost {
    use HasSlug, HasTimestamps; // দুটো trait একসাথে
    public function __construct(public string $title)
    {}
}

$post = new BlogPost("PHP OOP");


?>