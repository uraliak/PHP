<?php
class Cat{
    public function __construct(string $name, $color, int $weidth){
        $this->name = $name;
        $this->color = $color;
        $this->weidth = $weidth;
    }
    public function getName(){
        return $this->name;
    }
}

$cat = new Cat("Lulu", "black", "6");
$cat1 = new Cat("Bob", "pink", "1");
echo $cat->getName().' ,'.$cat->color.' ,'.$cat->weidth.'<br>';
echo $cat1->getName().' ,'.$cat1->color.' ,'.$cat1->weidth.'<br>';