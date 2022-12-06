<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageDirectory,$blog,$imagePath;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$imageDirectory = 'blog-image/';
        self::$image->move(self::$imageDirectory,self::$imageName);

        return self::$imageDirectory.self::$imageName;
    }

    public static function createBlog($request){

        self::$blog = new Blog();
        self::$blog->category_id= $request->category_id;
        self::$blog->title=$request->title;
        self::$blog->short_description=$request->short_description;
        self::$blog->long_description=$request->long_description;
        self::$blog->image=self::getImageUrl($request);
        self::$blog->long_description=$request->long_description;
        self::$blog->save();
    }
}
