<?php
    session_start();
    require_once "vendor/autoload.php";
    use App\classes\Blog;
    use App\classes\Auth;

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
            if (!isset($_SESSION["id"])){
                header('location:action.php?page=login');

            }else{
                $id=$_GET["id"];
                $blog = new Blog();
                $singleBlog = $blog->getBlogById($id);
                include "pages/edit-blog.php";
            }
        }
        elseif($_GET["page"]=="delete"){
            $id=$_GET["id"];
            $blog = new Blog();
            $blog->deleteBlogById($id);

        }
        elseif($_GET["page"]=="login"){
            include 'pages/login.php';

        }elseif($_GET["page"]=="logout"){
            $auth =new Auth();
            $auth->logout();
        }
        elseif($_GET["page"]=="dashboard"){
            include 'pages/dashboard.php';
        }
        elseif($_GET["page"]=="detail"){
            $blog = new Blog();
            $singleBlog = $blog->getBlogById($_GET['id']);
            print_r($singleBlog);
            include 'pages/detail.php';
        }

    }
    elseif (isset($_POST["btn"])){

        $blog = new Blog($_POST,$_FILES);
        $result = $blog->newBlog();
        include "pages/add-blog.php";
    }
    elseif (isset($_POST["update_btn"])){
        $id=$_POST;
        $blog = new Blog($_POST,$_FILES);
        $result = $blog->updateBlog();
    }
    elseif (isset($_POST["login_btn"])){
        $auth = new Auth($_POST);
        $result =$auth->login();

        include 'pages/login.php';


    }
