<?php


namespace App\classes;


trait ExampleThree
{
    public $x;
    public $y;

    private $me="dipankar";
    public function display(){
        $this->x=10;
        $this->y=10;
        echo $this->x+ $this->y;
    }
}