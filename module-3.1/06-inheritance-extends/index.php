<?php
// 06-inheritance-extends

// Parent Class 

class Post {
    public function __construct(
        public $title,
        public $content
    )
    {}
    public function getType(): string {
        return "post";
    }
}

// child class

class VideoPost extends Post{
    public function __construct(
            $title,
            $content,
            public string $videoUrl
        )
    {
         parent::__construct($title, $content);
    }

    public function getType(): string
    {
        return "Video"; // override
    }
}

?>