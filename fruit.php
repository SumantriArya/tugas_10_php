<?php
  class fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "the fruit is {$this->name} and the color is {$this->color}.";

    }
  }

  class strawberry extends fruit{
    public function message(){
        echo "Am I a fruit or a berrey? ";

    }
  }
   
  $straberry = new straberry("straberry","red");
  $straberry->message();
  $straberry->intro();
?>