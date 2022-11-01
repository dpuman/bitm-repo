<?php


namespace App\classes;


class Series
{
    public $start,$end,$result;

    public function __construct($post)
    {
        $this->start=$post["start_number"];
        $this->end=$post["end_number"];
    }

    public function getSeries(){
        for($this->start;$this->start<=$this->end;$this->start++){
            $this->result .= $this->start." ";
        }

        return $this->result;
    }

}