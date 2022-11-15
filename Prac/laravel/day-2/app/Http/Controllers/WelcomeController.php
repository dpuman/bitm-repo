<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WelcomeController extends Controller
{
    public $blogs,$blog;
    public function index(){
        $this->blogs=Blog::getAllBlog();
        return view('home',['blogs'=>$this->blogs]);
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function detail($id){
        $this->blog = Blog::getBlogById($id);
        return view('details',['blog'=>$this->blog]);
    }
}
