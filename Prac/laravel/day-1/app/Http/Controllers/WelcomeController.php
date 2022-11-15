<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{


    public function index(){
//        echo "Welcome to Dipankar".' - '.Controller::class ;
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
}
