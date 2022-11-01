<?php


namespace App\classes;


class HelloWorld
{
    public $message,$x,$y,$z,$item,$value;
    public $data=[];
    public $students =[];

    public function __construct()
    {
        $this->message="Hello World Three";
    }

    public function index(){
        /* */
        $this->x=10;
        $this->y=20;
        $this->z= $this->x+$this->y;

//        echo $this->z;
    }

    public function conditionalStatements(){
        /* */
        $this->x=10;
        $this->y=20;
        $this->z= $this->x+$this->y;

//        if ($this->x > $this->y){
//            echo $this->z;
//        }else{
//            echo "Hello World";
//        }



//        if ($this->x > $this->y){
//            echo $this->x;
//        }
//        elseif($this->y > $this->z){
//            echo $this->y;
//
//        }
//        elseif($this->z > $this->x){
//            echo $this->z;
//
//        }
//        else{
//            echo "Hello World";
//        }

//        switch ($this->x){
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello BITM";
//        }
    }

    public function repeatedStatements(){
        /* */
        $this->x=10;
        $this->y=20;
        $this->z= $this->x+$this->y;

//        for ($this->x=100;$this->x <= 200; $this->x++){
//            echo $this->x." Hello PHP </br> ";
//        }

//        for ($this->x=40;$this->x >= 20; $this->x--){
//            echo $this->x." ";
//        }


//        $this->x=100;
//        while ($this->x<110){
//            echo $this->x." ";
//            $this->x++;
//        }


//        $this->x=10;
//        do{
//            echo $this->x." ";
//            $this->x++;
//
//        }while($this->x>15);

//        foreach (){
//
//        }



    }

    public function arrayWorks(){
//        $this->data=[10,20,30,'BASIS','SEIP','BITM',20.2,true];
//        echo $this->data[2];
//
//        foreach ($this->data as $this->x => $this->item){
//            echo  $this->x."-".$this->item. " ";
//            echo $this->x;
//        }

        $this->students=[
            0=>['name'=>'Rubel',
                'email'=>'rubel@gmail.com',
                'mobile'=>[
                    'personal'=>'123545487',
                    'guardian'=>'985545',
                ]
            ],
            1=>['name'=>'Sojib',
                'email'=>'sojib@gmail.com',
                'mobile'=>[
                    'personal'=>'955655785',
                    'guardian'=>'458962',
                ]
            ],
            2=>['name'=>'Dipankar',
                'email'=>'dipankar@gmail.com',
                'mobile'=>[
                    'personal'=>'4566978885',
                    'guardian'=>'6985247',
                ]
            ],
            3=>['name'=>'Dipankar',
                'email'=>'dipankar@gmail.com',
                'mobile'=>'12588'
            ],
            4=>'Md Jubayer',

        ];

//        echo $this->student['name'];

//        echo $this->students[0]['name'] .' '.$this->students[0]['email'].' '.$this->students[0]['phone'];

//        foreach ($this->students as  $this->item){
//            echo $this->item['name'].' ';
//            echo $this->item['email'].' ';
//            echo $this->item['phone'].' ';
//
//            echo '</br>';
//
//            foreach ($this->item as $this->value){
//                echo $this->value.' ';
//
//            }
//            echo '<br/>';
//        }

        foreach ($this->students as  $this->item){

            if (is_array($this->item)){
                foreach ($this->item as $this->value){

                    if(is_array($this->value)){
                        foreach ($this->value as $phone){
                            echo $phone. ' ';
                        }
                    }else{
                        echo $this->value.' ';
                    }


                }
            }else{
                echo $this->item;
            }
            echo '<br/>';
        }

        echo '<pre>';
        print_r($this->students);

        var_dump($this->students);


    }

}