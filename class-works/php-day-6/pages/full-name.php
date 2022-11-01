<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Make Full Name</div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result ?>" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger rounded-0" name="full_name_btn"  value="Make Full Name">
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