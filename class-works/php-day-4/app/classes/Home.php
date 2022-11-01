<?php


namespace App\classes;


class Home
{
    public $message;
    public $data=[];

    public function __construct()
    {
        $this->message="Hello World From Home";
    }

    public function index(){
        header("location:action.php?page=home");
    }

    public function studentInfo(){
        $this->data=[
            0=>[
                'id'=>1,
                'name'=>"Rahim Khan",
                'profession'=>"Web Programmer",
                "mobile"=>'111111111111111'
            ],
            1=>[
                'id'=>2,
                'name'=>"Karim Khan",
                'profession'=>"Software Engineer",
                "mobile"=>'0000000000000'
            ],
            2=>[
                'id'=>3,
                'name'=>"Siplu Khan",
                'profession'=>"EEE Engineer",
                "mobile"=>'22222222'
            ],
            3=>[
                'id'=>3,
                'name'=>"Siplu Khan",
                'profession'=>"EEE Engineer",
                "mobile"=>'22222222'
            ],
        ];

        return $this->data;
    }

}