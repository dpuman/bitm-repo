<?php


namespace App\classes;


class PassGenerator
{
    public $string,$length,$result,$i,$passwordData=[],$key,$maxLength;

    public function __construct($post)
    {
        $this->length=$post["length"];
        $this->i=0;
        $this->passwordData=['1','!','a',"A",'$','3','#','*','B','b','^','d','y','u','h','n','i','f',];
        $this->maxLength=count($this->passwordData)-1;
    }

    public function getPassWord(){
        for ($this->i;$this->i < $this->length;$this->i++){
            $this->key=rand(0,$this->maxLength);
            $this->result .= $this->passwordData[$this->key];
        }
        return $this->result;

//        $this->string="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
//        $this->result= substr(str_shuffle($this->string),0,$this->length);
//        return $this->result;
    }

}