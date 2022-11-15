<?php


namespace App\classes;


class FileUpload
{
    private  $name;
    private  $imageName;
    private $directory;
    private $tempDirectory;

    public function __construct($post,$files)
    {
        $this->name= $post["name"];
        $this->imageName=$files["image"]["name"];
        $this->directory="assets/images";
        $this->tempDirectory =$files["image"]["tmp_name"];

    }

    public function uploadFile(){
        move_uploaded_file($this->tempDirectory,$this->directory.$this->imageName);
        return[
            'name'=>$this->name,
            'image' =>$this->directory.$this->imageName
        ];
    }

}