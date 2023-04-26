<?php
class A{
    public function method1(){
        $this->method2();
    }
    public function method2(){
        echo 'A';
    }
}

class B extends A{
    public function method2(){
        echo 'B';
    }
}

$a = new A;
$b = new B;

$b->method1();