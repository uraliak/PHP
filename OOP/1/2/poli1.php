<?php
class A{
    public function sayHello(){
        echo "Hello, I'm A";

    }
}

class B extends A{
    public function sayHello(){
        echo "Hello, I'm B";
    }
}
$a = new A;
$b = new B;
if ($a instanceof A) echo 'ok - A<br>';
if ($b instanceof B) echo 'ok - B<br>';
if ($b instanceof A) echo 'ok - A<br>';
$b->sayHello();