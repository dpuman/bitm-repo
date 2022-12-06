<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageDirectory,$category,$imagePath;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'category-image/';
        self::$image->move(self::$imageDirectory,self::$imageName);

        return self::$imageDirectory.self::$imageName;
    }

    public static function createCategory($request){

        self::$category = new Category();
        self::$category->name= $request->name;
        self::$category->description=$request->description;
        self::$category->image=self::getImageUrl($request);
        self::$category->save();
    }

    public static function updateCategory($request,$id){
        self::$category = Category::find($id);
        if($request->file('image')){
            if(file_exists(self::$category->image)){
                unlink(self::$category->image);
            }

            self::$imagePath = self::getImageUrl($request);

        }
        else{
            self::$imagePath = self::$category->image;
        }

        self::$category->name= $request->name;
        self::$category->description=$request->description;
        self::$category->image=self::$imagePath;
        self::$category->save();
    }

    public static function categoryDelete($id){
        self::$category= Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();


    }

}
