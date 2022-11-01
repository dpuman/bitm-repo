<?php

    require_once "vendor/autoload.php";
    use App\classes\FullName;
    use App\classes\Calculator;
    use App\classes\Series;
    $result='';

    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            include "pages/home.php";
        }elseif($_GET["page"]=="full-name"){

            include "pages/full-name.php";
        }elseif($_GET["page"]=="calculator"){

            include "pages/calculator.php";
        }elseif($_GET["page"]=="series"){

            include "pages/series.php";
        }

    }elseif(isset($_POST['full_name_btn'])){
        $fullName=new FullName($_POST);
        $result= $fullName->getFullName();
        include "pages/full-name.php";
    }elseif (isset($_POST["calculator_btn"])){
        $calculator=new Calculator($_POST);
        $result=$calculator->getResult();
        include "pages/calculator.php";
    }elseif (isset($_POST["series_btn"])){
        $series=new Series($_POST);
        $result=$series->getSeries();

        include "pages/series.php";
    }