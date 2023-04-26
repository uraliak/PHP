<?php
class A{
    public function sayHello(){
        echo "Hello, I'm A<br>";

    }
}

class B extends A{
    public function sayHello(){
        echo parent::sayHello(). "No, Hello, I'm B<br>";
    }
}
$a = new A;
$b = new B;
// if ($a instanceof A) echo 'ok - A<br>';
// if ($b instanceof B) echo 'ok - B<br>';
if ($b instanceof A) echo 'ok - A<br>';
$b->sayHello();