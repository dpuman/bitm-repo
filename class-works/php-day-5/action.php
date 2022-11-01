<?php
    require_once "vendor/autoload.php";
    use App\classes\Blog;


    if(isset($_GET['page'])){
        if($_GET["page"]=="home"){
            include "pages/home.php";
        }elseif ($_GET["page"]=="all-blog"){
            $blog = new Blog();
            $blogs =$blog->getAllBlog();
            include "pages/all-blog.php";
        }elseif ($_GET["page"]=="full-name"){
            include "pages/full-name.php";
        }elseif ($_GET["page"]=="details"){
            $id=$_GET["id"];
            $blog = new Blog();

            $singleBlog=$blog->getBlogById($id);
            include "pages/details.php";
        }

    }