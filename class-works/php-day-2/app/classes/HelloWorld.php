<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $firstName;
    public $lastName;
    public $test;

    public $x,$y,$z,$foo;


   public function __construct()
    {
        $this->message="<h1>Hello Day Two</h1>";
    }

    public function index(){
       $this->firstName="<b>DIPANKAR</b>";
       $this->lastName="<b>BARMAN</b>";

       $this->test="100.25";


       echo $this->message;

       echo gettype($this->test);
       echo "<br/>";

       echo $this->firstName ." &nbsp;&nbsp;". $this->lastName;

    }

    public function manage(){
       echo "<h1>Hello BITM</h1>";
    }

    public function arithmeticOperator(){

       $this->x=20;
       $this->y=10;

//       echo $this->x + $this->y;
//       echo "<br/>";
//       echo $this->x - $this->y;
//       echo "<br/>";
//       echo $this->x * $this->y;
//       echo "<br/>";
//       echo $this->x / $this->y;
//       echo "<br/>";
//       echo $this->x % $this->y;
//       echo "<br/>";

//       echo $this->x++;
//       echo "<br/>";
//       echo $this->x;
//       echo "<br/>";
//       echo ++$this->x;
//        echo "<br/>";
//        echo -$this->x;


    }

    public function assignmentOperator(){
        $this->x=40;
        $this->y=20;

//       echo $this->x += $this->y;
//       echo "<br/>";
//       echo $this->x -= $this->y;
//       echo "<br/>";
//       echo $this->x *= $this->y;
//       echo "<br/>";
//       echo $this->x /= $this->y;
//       echo "<br/>";
//       echo $this->x %= $this->y;
//       echo "<br/>";
//       echo $this->x .= $this->y;
//       echo "<br/>";
//
//       echo gettype($this->x);

    }
    public function conditionalOperator(){
        $this->x="20";
        $this->y=20;

//       echo $this->x > $this->y;
//       echo "<br/>";
//       echo $this->x < $this->y;
//       echo "<br/>";
//       echo $this->x <= $this->y;
//       echo "<br/>";
//       echo $this->x >= $this->y;
//       echo "<br/>";
//
//       echo $this->x == $this->y;
//       echo "<br/>";
//
//       echo $this->x === $this->y;
//       echo "<br/>";

    }
    public function logicalOperator(){
        $this->x=10;
        $this->y=20;
        $this->z=30;
        $this->foo=true;

        echo "<hr/>";

       echo ($this->x > $this->y) && ($this->y > $this->z);
       echo "<br/>";
       echo ($this->x < $this->z) && ($this->y < $this->z);
       echo "<br/>";
       echo ($this->x > $this->z) && ($this->y < $this->z);
       echo "<br/>";
       echo ($this->x < $this->z) && ($this->y > $this->z);
       echo "<br/>";




       echo ($this->x > $this->y) || ($this->y > $this->z);
       echo "<br/>";
       echo ($this->x < $this->z) || ($this->y < $this->z);
       echo "<br/>";
       echo ($this->x > $this->z) || ($this->y < $this->z);
       echo "<br/>";
       echo ($this->x < $this->z) || ($this->y > $this->z);
       echo "<br/>";

       echo $this->foo;



    }


}