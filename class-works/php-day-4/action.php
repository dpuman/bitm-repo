<?php
//    echo "<pre>";
//    print_r($_GET);

    require_once "vendor/autoload.php";
    use App\classes\Home;

    if(isset($_GET['page'])){
        if($_GET["page"]=='home'){

            $home =new Home();
            $students=$home->studentInfo();
//            echo "<pre>";
//            print_r($students);
//            echo "</pre>";


            include 'pages/home.php';
        }
        elseif ($_GET["page"]=="about"){
            include "pages/about.php";
        }elseif ($_GET["page"]=="contact"){
            include "pages/contact.php";
        }
    }