<?php


namespace App\classes;
use App\classes\Database;

class Blog
{

    private $title,$author,$description,$image,$sql,$database,$queryResult,$data=[],$row;

    public function __construct($post=null)
    {
        if(isset($post["title"])){
            $this->title=$post["title"];
            $this->author=$post["author"];
            $this->description=$post["description"];
            $this->image=$post["image"];
        }
    }

    public function newBlog(){
        $this->sql="INSERT INTO blogs (title,author,description,image) VALUES ('$this->title','$this->author','$this->description','$this->image')";

        $this->database = new  Database();

        mysqli_query($this->database->dbConnect(),$this->sql);

        return "Record Save Success";
    }

    public function getAllBlog(){
        $this->sql="SELECT * FROM blogs";

        $this->database = new  Database();

        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);

//        $this->data = mysqli_fetch_assoc($this->queryResult);

//        echo "<pre>";
//
//        print_r($this->queryResult);
//        echo "<hr/>";
//        print_r($this->data);
//        echo "<hr/>";


        while ($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }
        echo "<pre>";
        print_r($this->data);

        return $this->data;



    }


}