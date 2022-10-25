<?php


namespace App\classes;


class helloWorld
{
    public $message;
    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index(){
        echo $this->message;
    }
}