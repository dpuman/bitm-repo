<?php


namespace App\classes;


class WordCharCount
{
    public $input,$wordNumber,$charNumber,$result;

    public function __construct($post)
    {
        $this->input=$post["string"];
    }

    public function getResult(){
        $this->wordNumber= $this->wordCount();
        $this->charNumber= $this->characterCount();

        return $this->wordNumber.". ".$this->charNumber;
    }

    public function characterCount(){
        $count = strlen($this->input) - substr_count($this->input, ' ');
        return "No Of Char: ".$count;
    }

    public function wordCount(){
        return "No Of Word: ".str_word_count($this->input);
    }



}