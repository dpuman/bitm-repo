<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product,$image,$imageName,$imageDirectory;

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
}
