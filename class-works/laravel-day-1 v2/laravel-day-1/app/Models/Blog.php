<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blogs;

    public static function getAllBlog(){
        return [
            0=>[
                'id'=>1,
                'title'=>'this is blog title One',
                'short_description'=>'This is blog title one short description',
                'long_description'=>'This is blog title one long description',
                'image'=>'team-1.jpg',
            ],
            1=>[
                'id'=>2,
                'title'=>'this is blog title Two',
                'short_description'=>'This is blog title two short description',
                'long_description'=>'This is blog title two long description',
                'image'=>'team-2.jpg',

            ],
            2=>[
                'id'=>3,
                'title'=>'this is blog title Three',
                'short_description'=>'This is blog title three short description',
                'long_description'=>'This is blog title three long description',
                'image'=>'blog-2.jpg',
            ],
            3=>[
                'id'=>4,
                'title'=>'this is blog title Four',
                'short_description'=>'This is blog title four short description',
                'long_description'=>'This is blog title four long description',
                'image'=>'team-3.jpg',
            ],
            4=>[
                'id'=>5,
                'title'=>'this is blog Five One',
                'short_description'=>'This is blog title five short description',
                'long_description'=>'This is blog title five long description',
                'image'=>'team-4.jpg',
            ]
        ];
    }

    public static function getBlogById($id){
        self::$blogs = self::getAllBlog();
        foreach (self::$blogs as $blog){
            if($blog['id']==$id){
                return $blog;
            }
        }
    }
}
