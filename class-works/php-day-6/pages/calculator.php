<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator</div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Action</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" checked  name="action" value="+"> + </label>
                                        <label for=""><input type="radio"  name="action" value="-"> - </label>
                                        <label for=""><input type="radio"  name="action" value="*"> * </label>
                                        <label for=""><input type="radio"  name="action" value="/"> / </label>
                                        <label for=""><input type="radio"  name="action" value="%"> % </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $result?>" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" name="calculator_btn" value="Make Result">
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