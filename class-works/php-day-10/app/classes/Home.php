<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;

use App\classes\Teacher;
use App\classes\ExampleThree;

class Home extends Teacher implements ExampleOne , ExampleTwo
{
    use ExampleThree;

    public $message;
    public static $city="Khulna";

    public function __construct()
    {
        $this->message="<h1>Hello World</h1>";
        $this->email ="rakib@gmail.com";

        self::$city="Dhaka";
    }

    public function test(){
        echo "Email: ".$this->email." <br/>";
        echo $this->password."<br/>";

        echo "Index ".$this->index()."<br/>";
        echo $this->create()."<br/>";

        echo "City".self::$city;

    }

    public static function demo()
    {
        echo "<br/>".self::$city;

        User::hello();
    }


    public function one()
    {
        echo "On one";
    }

    public function two()
    {
        echo "On Two";
    }

    public function three()
    {
        echo "On Three";
    }

    public function ten()
    {
       echo "TEN";
    }

    public function ten1()
    {
        echo "TEN ONE";
    }

    public function ten2()
    {
        echo "TEN TWO";
    }

    public function demo2()
    {
        echo "Country".$this->country;
    }

    public function example(){
        $this->display();
        echo $this->me;
    }


    public function index(){
        header("location:action.php?page=home");

    }

}