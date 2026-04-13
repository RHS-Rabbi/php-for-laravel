<?php  
// 02-why-$this-keyword-need

class Student {
    public $name;
    public function sayHello(){
        echo "Hello, my name is " . $this->name;
    } 
}
$rabbi = new Student();
$rabbi->name = "Rabbi";

echo $rabbi->sayHello() . "<br/>";

$shawon = new Student();
$shawon->name = "Shawon";

echo $shawon->sayHello() . "<br/>";


?>