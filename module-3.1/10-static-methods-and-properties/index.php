<?php
// 10-static-methods-and-properties

class PostHelper{
    // Static property

    public static int $totalPosts = 0;

    // Static method - object ছাড়াই কল
    public static function formatTitle(string $t):string {
        self::$totalPosts++; // self:: নিজের ক্লাস
        return strtoupper($t);
    }

    public static function getCount(): int{
        return self::$totalPosts;
    }
}

// :: (Scope Resolution Operator) দিয়ে কল
PostHelper::formatTitle("php oop"); // -> PHP OOP
PostHelper::formatTitle("laravel"); // -> Laravel

echo PostHelper::getCount(); // -> 2
echo PostHelper::$totalPosts; // -> 2



?>