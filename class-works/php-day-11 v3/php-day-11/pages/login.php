<?php
    if (isset($_SESSION["id"])){
        header('location:action.php?page=dashboard');

    }

?>

<?php include "pages/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        <h4 class="text-center text-danger"><?php echo $result;?></h4>
                        <form action="action.php" method="post"  >

                            <div class="row mb-4">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" id="">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="" class="col-md-3">password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="">
                                </div>
                            </div>



                            <div class="row mt-4">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login_btn" class="btn btn-outline-success px-5" value="Login" id="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "pages/footer.php"?>


