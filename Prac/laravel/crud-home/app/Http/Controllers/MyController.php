<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public $products,$product;
    public function index(){
        $this->products = Product::all();
        return view('home.index',['products'=>$this->products]);
    }
    public function detail($id){
        $this->product = Product::find($id);
        return view ('home.details',['product'=>$this->product]);
    }
}
