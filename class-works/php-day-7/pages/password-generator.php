<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Password Generator</div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password Length</label>
                                    <div class="col-md-9">
                                        <input name="length" class="form-control" type="number" >
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Your Password</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" readonly value="<?php echo $result ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" name="password_generator_btn" value="Make Result">
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