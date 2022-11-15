<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WelcomeController extends Controller
{
    public $message,$blogs=[],$blog;

    public function index(){
        $this->blogs=Blog::getAllBlog();
//        return $this->blogs;

        return view('home',['blogs' => $this->blogs]);
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function detail($id){
        $this->blog = Blog::getBlogById($id);

        return view('detail',['blog'=>$this->blog]);

    }


}
