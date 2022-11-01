<?php


namespace App\classes;


class OddEven
{
    public $start,$end,$action,$result,$series;

    public function __construct($post)
    {
        $this->start=$post["start_number"];
        $this->end=$post["end_number"];
        $this->action=$post["action"];
    }

    public function getResult(){
        if($this->action=="even"){
            $this->result=$this->getEvenNumbers();
        }elseif($this->action == "odd"){
            $this->result= $this->getOddNumbers();

        }

        return $this->result;
    }

    public function getEvenNumbers(){

        for($this->start;$this->start<=$this->end;$this->start++){
            if($this->start%2==0){
                $this->series.=$this->start." ";
            }
        }
        return $this->series;


    }
    public function getOddNumbers(){
        for($this->start;$this->start<=$this->end;$this->start++){
            if($this->start%2!=0){
                $this->series.=$this->start." ";
            }
        }
        return $this->series;

    }

}