<?php
    const PI = 3.14;

    interface calculateSquare{
        public function calculateSquare():float;
    }
class Rectangle implements CalculateSquare{
    private $x;
    private $y;

    public function_construct (int $x, int $y){
        $this -> x = $x;
        $this -> y = $y;
    }

    public function calculateSquare():float{
        return  $this -> x * $this -> y;
    }

    class Square implements CalculateSquare{
        private $x;
        
        public function_construct(int $x)():float{
        $this -> x = $x;
    }
}

    class Circle implements CalculateSquare{
        const PI = 3.14;
        private $r;

        public function_construct(int $r)():float{
            $this -> r = $r;
        }

        public function calculateSquare()():float{
            return PI * ($this -> r ** 2);
        }
    }

    $object = [
        $rectangle = new Rectangle(2, 5);
        $square = neew Square(4);
        $circle = new Circle(5);
    ];

    foreach ($object as $ob){
        if ($ob instanceof CalculateSquare){
            echo $ob -> calculateSquare(). '<br>';
        }
    }
    
    echo $rectangle -> calculateSquare().'<br>';
    echo $square -> calculateSquare().'<br>';
    echo $circle -> calculateSquare().'<br>';

}