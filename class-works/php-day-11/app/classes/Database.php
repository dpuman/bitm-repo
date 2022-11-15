<?php


namespace App\classes;


class Database
{
    private $hostName,$userName,$password,$databaseName,$link;

    public function __construct()
    {
        $this->hostName="localhost";
        $this->userName="root";
        $this->password="";
        $this->databaseName="php_day_11";
    }

    public function dbConnect(){
        $this->link=mysqli_connect($this->hostName,$this->userName,$this->password,$this->databaseName);

        return $this->link;
    }
}