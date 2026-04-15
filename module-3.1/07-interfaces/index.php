<?php
// 07-interfaces

// interface --- শুধু method signature, কোনো body নেই

interface Publishable {
    public function publish(): bool;
    public function unpublish(): bool;
    public function getSlug(): string;
}

interface Commentable {
    public function addComment( string $text ): void;
}

// implements -- একাধিক interface একসাথে
class BlogPost implements Publishable, Commentable {
    public function publish(): bool
    {
        /* ... */ return true;
    }
    public function unpublish(): bool
    {
        return true;
    }
    public function getSlug(): string {
        return "slug";
    }
    public function addComment(string $text): void {}
}

?>