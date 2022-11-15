<?php
    require_once "vendor/autoload.php";
    use App\classes\FileUpload;


    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            include "pages/home.php";
        }

    }elseif (isset($_POST["btn"])){
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        echo "</pre>";

        $fileUpload= new FileUpload($_POST,$_FILES);
        $result = $fileUpload->uploadFile();
        include "pages/home.php";
    }
