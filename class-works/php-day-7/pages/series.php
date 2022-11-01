<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My SERIES</div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Start Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="start_number" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">End Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="end_number" required>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" readonly><?php echo $result?></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-danger" name="series_btn" value="Make Result">
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