<?php

namespace App\classes;
use App\classes\Database;

class Home
{
    private $database;
    public function index(){

//        $this->database = new Database();
//        echo "<pre>";
//        print_r($this->database->dbConnect());
//        echo "</pre>";
//        exit();

        header("location:action.php?page=home");

    }

}