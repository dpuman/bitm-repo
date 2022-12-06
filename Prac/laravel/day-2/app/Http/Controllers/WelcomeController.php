<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WelcomeController extends Controller
{
    public $blogs,$blog;
    public $startNumber,$endNumber,$series,$seriesResult;
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

    public function series(){
        return view('series');
    }

    public function generateSeries(Request $request){

        $this->startNumber = $request->start_number;
        $this->endNumber = $request->end_number;

        for ($this->startNumber;$this->startNumber<=$this->endNumber;$this->startNumber++){
            $this->series .= $this->startNumber.'+';
            $this->seriesResult +=$this->startNumber;
        }

        $this->series = rtrim($this->series,'+');
        $this->series = $this->series.' = '.$this->seriesResult;

        return redirect('/series')->with('series',$this->series);
    }


}
