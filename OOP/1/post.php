<?php
class Post{
    private $title;
    protected $text; //внутри класса можем свободно обратиться

    public function __construct(string $title, string $text){
        $this->title = $title;
        $this->text = $text;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setText(string $text){
        $this->text = $text;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getText(){
        return $this->text;
    }
}

class Lesson extends Post{
    private $homework;

    public function __construct(string $title, string $text, string $homework){
        parent::__construct($title, $text);
        $this->title = $title;
        $this->text = $text;
        $this->homework = $homework;
    }
    public function setHomework(string $homework){
        $this->homework= $homework;
    }
    public function getHomework(): string
    {
        return $this->homework;
    }
}

$post = new Post("Article", "Loream Ipsum");
var_dump($post);
print "<br>";

$lesson = new Lesson("OOP", "PHP", "POP");
$lesson
var_dump($lesson);