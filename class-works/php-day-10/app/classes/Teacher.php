<?php


namespace App\classes;


abstract class Teacher
{
    public $country="Bangladesh";
    public function demo1(){
        echo $this->country;
    }

    public abstract function demo2();
}