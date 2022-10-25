<?php
 require_once 'vendor/autoload.php';
 use App\classes\HelloWorld;


 $helloWorld = new HelloWorld();
 $helloWorld->index();

 $helloWorld->manage();
 $helloWorld->arithmeticOperator();
 $helloWorld->assignmentOperator();
 $helloWorld->conditionalOperator();
 $helloWorld->logicalOperator();
