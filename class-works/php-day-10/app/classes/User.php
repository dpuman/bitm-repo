<?php


namespace App\classes;


class User
{
    public $email="admin@mail.com";
    protected $password = "123456";
    private $userType="admin";

    public static $name="DIPANKAR";

    public function __construct()
    {
        $this->email="admin@mail.com";
        $this->password="123456";
        $this->userType="admin";

        self::$name="BASIS";
    }

    public function index(){
        echo self::$name;
        echo "in Index";
    }

    protected function create(){
            echo "in Create";
    }

    private function manage(){
            echo "in Manage";
    }

    public static function hello(){
        echo "<br/> Hai Hello";
    }




}