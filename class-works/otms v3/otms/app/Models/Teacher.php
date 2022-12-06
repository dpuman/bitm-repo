<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageDirectory,$imageExtension,$teacher;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$imageExtension;
        self::$imageDirectory='admin/assets/images/teachers-images/';
        self::$image->move(self::$imageDirectory,self::$imageName);

        return self::$imageDirectory.self::$imageName;

    }

    public static function createTeacher($request)
    {
        self::$teacher              = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::getImageUrl($request);

        self::$teacher->save();
    }

    public static function updateTeacher($request,$id)
    {
        self::$teacher =Teacher::find($id);
        if($request->file('image')){
            if(file_exists(self::$teacher->image)){
                unlink(self::$teacher->image);
            }
            self::$image = self::getImageUrl($request);
        }else{
            self::$image = self::$teacher->image;
        }

        self::$teacher->name        = $request->name;
        self::$teacher->email       = $request->email;
        if ($request->password){
            self::$teacher->password    = bcrypt($request->password);
        }
        self::$teacher->mobile      = $request->mobile;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::$image;

        self::$teacher->save();
    }

    public static function deleteTeacher($id)
    {
       self::$teacher = Teacher::find($id);
        if(file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
       self::$teacher->delete();
    }

}
