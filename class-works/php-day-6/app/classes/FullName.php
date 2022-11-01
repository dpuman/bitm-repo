<?php

namespace App\classes;

class FullName
{
    public $firstName,$lastName;
    public function __construct($post)
    {
        $this->firstName = $post["first_name"];
        $this->lastName = $post["last_name"];
    }
    public function getFullName(){
       return $this->firstName.' '.$this->lastName;
    }

}