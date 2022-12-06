<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public static $image,$imageName,$ImageDirectory,$ImageExtension,$teacher;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$ImageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000,20000).'.'.self::$ImageExtension;
        self::$ImageDirectory='admin/assets/images/teachers-images/';
        self::$image->move(self::$ImageDirectory,self::$imageName);

        return self::$ImageDirectory.self::$imageName;

    }

    public static function createTeacher($request){
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        self::$teacher->password = $request->password;
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->image = self::getImageUrl($request);

        self::$teacher->save();


    }

}
