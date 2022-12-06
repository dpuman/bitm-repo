<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories,$category;
    public function index(){
        return view('category.index');
    }
    public function create(Request $request){
        return view('category.create');
    }

    public function store(Request $request){
        Category::createCategory($request);

        return redirect('/category/create')->with('message',"Category Created successfully");
    }

    public function manage(){
        $this->categories = Category::all();

        return view('category.manage',['categories'=>$this->categories]);
    }

    public function edit($id){

        $this->category = Category::find($id);

        return view('category.edit',['category'=>$this->category]);
    }

    public function update(Request $request,$id){
        Category::updateCategory($request,$id);
        return redirect('/category/manage')->with('message',"Updated successfully");
    }
    public function delete($id){

        Category::categoryDelete($id);


        return redirect('/category/manage')->with('message',"Deleted successfully");

    }


}
