<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
        return view('product.index');
    }

    public function store(Request $request){


        Product::newProduct($request);
        return redirect('/product/add')->with('message','Product info saved successfully');

    }
}
