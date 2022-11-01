<?php

    require_once "vendor/autoload.php";
    use App\classes\HelloWorld;

    $helloWorld= new HelloWorld();

    $helloWorld->index();
    $helloWorld->conditionalStatements();
    $helloWorld->repeatedStatements();
    $helloWorld->arrayWorks();