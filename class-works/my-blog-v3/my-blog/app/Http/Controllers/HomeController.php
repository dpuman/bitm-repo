<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $categories,$blogs,$blog;
    public function index(){
        $this->blogs = Blog::orderBy('id','desc')->get();
        $this->categories = Category::orderBy('id','desc')->get();
        return view('home.index',['blogs'=>$this->blogs]);
    }

    public function detail($id){
        return view('home.detail',['blog'=>Blog::find($id)]);

    }
    public function newComment(Request $request,$id){
        return $request->all();

    }
}
