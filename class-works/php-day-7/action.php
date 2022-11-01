<?php

    require_once "vendor/autoload.php";
    use App\classes\FullName;
    use App\classes\Calculator;
    use App\classes\Series;
    use App\classes\OddEven;
    use App\classes\WordCharCount;
    use App\classes\PassGenerator;
    $result='';

    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            include "pages/home.php";
        }
        elseif($_GET["page"]=="full-name"){
            include "pages/full-name.php";
        }
        elseif($_GET["page"]=="calculator"){
            include "pages/calculator.php";
        }
        elseif($_GET["page"]=="series"){
            include "pages/series.php";
        }
        elseif($_GET["page"]=="odd-even"){
            include "pages/odd-even.php";
        }
        elseif($_GET["page"]=="word-char-count"){
            include "pages/word-char-count.php";
        }
        elseif($_GET["page"]=="password-generator"){
            include "pages/password-generator.php";
        }

    }
    elseif(isset($_POST['full_name_btn'])){
        $fullName=new FullName($_POST);
        $result= $fullName->getFullName();
        include "pages/full-name.php";
    }
    elseif (isset($_POST["calculator_btn"])){
        $calculator=new Calculator($_POST);
        $result=$calculator->getResult();
        include "pages/calculator.php";
    }
    elseif (isset($_POST["series_btn"])){
        $series=new Series($_POST);
        $result=$series->getSeries();
        include "pages/series.php";
    }
    elseif (isset($_POST["odd_even_btn"])){
        $oddEven=new OddEven($_POST);
        $result=$oddEven->getResult();
        include "pages/odd-even.php";
    }
    elseif (isset($_POST["word_char_count_btn"])){
        $wordCharCount= new WordCharCount($_POST);
        $result = $wordCharCount->getResult();
        include "pages/word-char-count.php";
    }
    elseif (isset($_POST["password_generator_btn"])){

        $passGenerator=new PassGenerator($_POST);
        $result=$passGenerator->getPassWord();


        include "pages/password-generator.php";
    }