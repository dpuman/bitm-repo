<?php
    require_once "vendor/autoload.php";
    use App\classes\Blog;
    $result ="";
    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            include "pages/home.php";
        }
        elseif($_GET["page"]=="add-blog"){
            include "pages/add-blog.php";
        }
        elseif($_GET["page"]=="manage-blog"){
            $blog = new Blog();
            $blogs = $blog->getAllBlog();


            include "pages/manage-blog.php";
        }

    }elseif (isset($_POST["btn"])){
        $blog = new Blog($_POST);
        $result = $blog->newBlog();

        include "pages/home.php";
    }
