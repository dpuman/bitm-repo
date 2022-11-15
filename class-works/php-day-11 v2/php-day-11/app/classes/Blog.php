<?php


namespace App\classes;
use App\classes\Database;

class Blog
{

    private $title,$author,$description,$image,$sql,$database,$queryResult,$data=[],$row,$id,$blog;
    private $directory,$tempLocation,$imageName;

    public function __construct($post=null,$files=null)
    {
        $this->database = new Database();
        if(isset($post["title"])){
            $this->title=$post["title"];
            $this->author=$post["author"];
            $this->description=$post["description"];

            if(isset($post["id"])){
                $this->id= $post["id"];
            }

           if($files["image"]["name"]){
               $this->imageName= $files["image"]["name"];
               $this->tempLocation =$files["image"]["tmp_name"];
               $this->directory = "assets/images/blog-images/";
           }
        }
    }

    private function getImageUrl(){
        move_uploaded_file($this->tempLocation,$this->directory.$this->imageName);

        return $this->directory.$this->imageName;
    }

    public function newBlog(){

        $this->image = $this->getImageUrl();

        $this->sql="INSERT INTO blogs (title,author,description,image) VALUES ('$this->title','$this->author','$this->description','$this->image')";



        mysqli_query($this->database->dbConnect(),$this->sql);

        return "Record Save Success";
    }

    public function getAllBlog(){
        $this->sql="SELECT * FROM blogs";



        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);

//        $this->data = mysqli_fetch_assoc($this->queryResult);
//        echo "<pre>";
//        print_r($this->queryResult);
//        echo "<hr/>";
//        print_r($this->data);
//        echo "<hr/>";


        while ($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }
//        print_r($this->data);
//        echo "</pre>";

        return $this->data;
    }

    public function getBlogById($id){

        $this->sql = "SELECT * FROM blogs WHERE id = $id";


        $this->queryResult = mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data = mysqli_fetch_assoc($this->queryResult);
        return $this->data;


    }

    public function updateBlog(){
        if($this->imageName){
            $this->image = $this->getImageUrl();

        }else{
            $this->blog= $this->getBlogById($this->id);
            $this->image = $this->blog["image"];
        }
        $this->sql = "UPDATE blogs SET title ='$this->title', author ='$this->author', description = '$this->description',image = '$this->image' WHERE id = '$this->id' ";



        mysqli_query($this->database->dbConnect(), $this->sql);

        header('location:action.php?page=manage-blog');

    }


    public function deleteBlogById($id){

        $this->sql = "DELETE FROM blogs WHERE id = '$id'";

        mysqli_query($this->database->dbConnect(),$this->sql);

        header('location:action.php?page=manage-blog');

    }


}