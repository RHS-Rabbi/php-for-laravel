<?php
// 03-properties-and-method

class Post{
    // Properties (data)
    public string $title;
    protected int $views = 0;
    private  string $secret = "internal";

    // Methods (behavior)
    public function publish():void {
        $this->views++;
        echo 'Post Published ';
    }
    public function getViews(): int {
        return $this->views;
    }
}

$p = new Post();
$p->publish();
echo $p->getViews(); // -> Post Published 1


?>