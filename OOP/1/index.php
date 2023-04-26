<?php
// class CatAndDog{}
class Cat{ //class
    public $name;
    public $color;
    public $width;

    public function setName(string $name){
        $this->name = $name;
    }
    public function sayHello(){
        echo "Hello, I am ".$this->name.'<br>';
    }

    public function getName(){
        return $this->name;
    }
}
$cat = new Cat(); //вызов функции без доллара
$cat->name = "Milka";
$cat1 = new Cat(); //вызов функции без доллара
$cat1->name = "Mil";
echo $cat->name.'<br>';
echo $cat1->name.'<br>';
// var_dump($cat);
$cat->sayHello();
$cat1->sayHello();
$cat->getName("Bob");
$cat->setName("Bob");
$cat1->setName("Bob");
// $cat1 = new Cat(); //object
// var_dump($cat1);
// $cat2 = new Cat(); //object
// var_dump($cat2);
// $cat3 = new Cat(); //object
// var_dump($cat3);