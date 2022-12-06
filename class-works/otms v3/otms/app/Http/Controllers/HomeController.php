<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.index');
    }
    public function about(){
        return view('website.about.index');
    }
    public function categoryTraining(){
        return view('website.category.index');
    }
    public function allTraining(){
        return view('website.training.index');
    }
    public function trainingDetail(){
        return view('website.training.detail');
    }
    public function contact(){
        return view('website.contact.index');
    }

    public function loginRegistration(){
        return view('website.auth.index');
    }
}
