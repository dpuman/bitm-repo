<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product,$image,$imageName,$imageDirectory,$imagePath;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'product-image/';
        self::$image->move(self::$imageDirectory, self::$imageName);
        return self::$imageDirectory.self::$imageName;
    }

    public static function newProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->description = $request->description;
        self::$product->price = $request->price;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();

    }

    public static function updateProduct($request,$id){
        self::$product = Product::find($id);

        if ($request->file('image')){
            if(file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$imagePath = self::getImageUrl($request);
        }
        else{
            self::$imagePath = self::$product->image;
        }

        self::$product->name = $request->name;
        self::$product->description = $request->description;
        self::$product->price = $request->price;
        self::$product->image = self::$imagePath;
        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);

        if (file_exists(self::$product->image)){
            unlink(self::$product->image);
        }

        self::$product->delete();
    }


}
