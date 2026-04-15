<?php 
// 08-Abstract Classes

// Abstract Class - সরাসরি new করা যায় না

abstract class BasePost {
    public function __construct(
        protected string $title
    )
    {}

    // concrete method - সব child পাবে

    public function getTitle(): string{
        return $this->title;
    }
    // Abstract method - child অবশ্যই implement করবে
    abstract public function render(): string;
    abstract public function getType(): string;
}

class ArticlePost extends BasePost{
    public function render(): string{
        return "<article>{$this->title}</article>";
    }
    public function getType(): string
    {
        return "article";
    }
}

$post = new ArticlePost("My First Blog");

echo $post->getTitle(); // My First Blog
echo $post->render();   // <article>My First Blog</article>

?>