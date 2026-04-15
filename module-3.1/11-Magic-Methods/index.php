<?php 
// 11-Magic-Methods

class Post {
    private array $data = [];

    // __get - অস্তিত্বহীন/private property পড়লে
    public function __get($name): mixed
    {
        return $this->data[$name] ?? null;
    }

    // __set - অস্তিত্বহীন/private property সেট করলে
    public function __set($name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    // __toString - echo করলে string বানাবে
    public function __toString(): string
    {
        return $this->data['title'] ?? 'Untitled';
    }

    // __call - অস্তিত্বহীন method call হলে
    public function __call($name, array $arguments): mixed
    {
        echo "Method $name কল হয়েছে";
        return null;
    }
}

// object create
$p = new Post();

// __set call হবে
$p->title = "OOP";

// __get + __toString use হবে
echo $p;



?>