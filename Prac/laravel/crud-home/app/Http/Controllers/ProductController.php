<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public $products,$product;
    public function index(){
        return view('product.index');
    }

    public function store(Request $request){


        Product::newProduct($request);
        return redirect('/product/add')->with('message','Product info saved successfully');

    }

    public function manage(){
        $this->products = Product::all();
        return view("product.manage",['products' => $this->products]);
    }

    public function edit($id){
        $this->product = Product::find($id);
        return view('product.edit',['product'=>$this->product]);
    }

    public function update(Request $request,$id){
        Product::updateProduct($request,$id);

        return redirect('/product/manage')->with('message','Product Updated Successfully');
    }

    public function delete($id){
        Product::deleteProduct($id);

        return redirect('/product/manage')->with('message','Product Deleted Successfully');

    }

}
