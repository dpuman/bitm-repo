<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class WelcomeController extends Controller
{
    public $message,$blogs=[],$blog,$fullName;
    public $firstNumber,$secondNumber,$action,$result;


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

    public function fullName(Request $request){
//         $request->all();
        $this->fullName = $request->first_name.' '.$request->last_name;

        return redirect('/about')->with('message',$this->fullName);

    }

    public function calculator(Request $request) {
        $this->firstNumber= $request->first_number;
        $this->secondNumber= $request->second_number;
        $this->action=$request->choice;

        switch ($this->action){
            case '+':
                $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $this->result = $this->firstNumber / $this->secondNumber;
                break;
            case '%':
                $this->result = $this->firstNumber % $this->secondNumber;
                break;
            default:
                $this->result = "Not Valid";
        }

        return redirect('/service')->with('result',$this->result);
    }


}
