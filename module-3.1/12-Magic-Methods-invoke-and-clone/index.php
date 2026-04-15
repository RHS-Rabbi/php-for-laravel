<?php 
// 12-Magic-Methods-invoke-and-clone

// __invoke - object কে function এর মতো কল

class Multiplier {
    public function __construct(private int $factor){}
    public function __invoke(int $n): int
    {
        return $n * $this->factor;
    }
}
$triple = new Multiplier(3);
echo $tiple(10); // -> 30 (object কে function হিসেবে)

// __clone - clone এর পরে
class Post{
    public array $tags = [];
    public function __clone() {
        // deep copy - tags array কে নতুন করে clone
        $this->tags = array_map(fn($t) => clone $t, $this->tags );
    }
}
$orginal = new Post();
$copy = clone $orginal // __clone চলবে 

?>