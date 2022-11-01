<?php


namespace App\classes;


class Hello
{
    public function index(){
        header("location:action.php?page=home");
    }

}