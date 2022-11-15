<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">

                    <div class="col-md-8 mx-auto">

                        <div class="card">
                            <div class="card-header">File Upload</div>
                            <div class="card-body">
                                <form action="action.php" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <label for="" class="col-md-3">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" id="">
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

                        <hr/>
                        <table class="table table-border table-hover">
                            <tr>
                                <th>Input Name</th>
                                <td><?php echo $result["name"]?></td>
                            </tr>
                            <tr>
                                <th>Input Image</th>
                                <td>
                                    <img src="<?php echo $result["image"]?>" alt="" height="200" width="250">
                                </td>
                            </tr>
                        </table>



                    </div>

            </div>
        </div>
    </section>
<?php include "pages/footer.php"?>


