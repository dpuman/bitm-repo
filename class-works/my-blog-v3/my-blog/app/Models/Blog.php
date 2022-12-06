<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageDirectory,$blog,$imagePath,$imageExtension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
//        self::$imageName = self::$image->getClientOriginalName();
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$imageExtension;

        self::$imageDirectory = 'blog-image/';
        self::$image->move(self::$imageDirectory,self::$imageName);

        return self::$imageDirectory.self::$imageName;
    }

    public static function createBlog($request)
    {
        self::saveBasicInfo(new Blog(),$request,self::getImageUrl($request));
    }

    //    One TO One Relationship
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function updateBlog($request,$id){
        self::$blog = Blog::find($id);
        if($request->file('image')){
            if(file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$imagePath = self::getImageUrl($request);
        }else{
            self::$imagePath = self::$blog->image;
        }

        self::saveBasicInfo(self::$blog,$request,self::$imagePath);

    }

    public static function deleteBlog($id){
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();

    }

    public static function saveBasicInfo($blog,$request,$imagePath){
        $blog->category_id= $request->category_id;
        $blog->title=$request->title;
        $blog->short_description=$request->short_description;
        $blog->long_description=$request->long_description;
        $blog->image = $imagePath;

        $blog->save();
    }
}
