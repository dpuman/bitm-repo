<?php
    require_once "vendor/autoload.php";
    use App\classes\Blog;

    $result ="";
    if(isset($_GET["page"])){
        if($_GET["page"]=="home"){
            $blog = new Blog();
            $blogs = $blog->getAllBlog();
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
        elseif($_GET["page"]=="edit"){
            $id=$_GET["id"];
            $blog = new Blog();
            $singleBlog = $blog->getBlogById($id);
            include "pages/edit-blog.php";
        }
        elseif($_GET["page"]=="delete"){
            $id=$_GET["id"];
            $blog = new Blog();
            $blog->deleteBlogById($id);

        }

    }
    elseif (isset($_POST["btn"])){

        $blog = new Blog($_POST,$_FILES);
        $result = $blog->newBlog();

        include "pages/home.php";
    }
    elseif (isset($_POST["update_btn"])){
        $id=$_POST;
        $blog = new Blog($_POST,$_FILES);
        $result = $blog->updateBlog();


    }
