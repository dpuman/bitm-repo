<?php


namespace App\classes;


class Series
{
    public $start,$end,$result,$series,$sum;

    public function __construct($post)
    {
        $this->start=$post["start_number"];
        $this->end=$post["end_number"];
    }

    public function getSeries(){
        if($this->start< $this->end){

            $this->result= $this->getSmallToBigSeries();
        }elseif($this->start > $this->end){

            $this->result= $this->getBigToSmallSeries();
        }else{
            $this->result= $this->start;
        }

        return $this->result;
    }

    public function getSmallToBigSeries(){

        for($this->start;$this->start<=$this->end;$this->start++){
            $this->series .= $this->start."+";
            $this->sum+=$this->start;
        }
        $this->series = rtrim($this->series,"+");
        return $this->result=$this->series."=".$this->sum;

    } public function getBigToSmallSeries(){
        for($this->start;$this->start>=$this->end;$this->start--){
            $this->result .= $this->start." ";
        }
        return $this->result;
    }


}