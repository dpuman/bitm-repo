<?php include "pages/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Add Blog Form</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result;?></h4>
                        <form action="action.php" method="post" >

                            <div class="row mb-4">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control" id="">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="" class="col-md-3">Author Info</label>
                                <div class="col-md-9">
                                    <input type="text" name="author" class="form-control" id="">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="" class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control" id="">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success px-5" value="Upload A File" id="">
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


