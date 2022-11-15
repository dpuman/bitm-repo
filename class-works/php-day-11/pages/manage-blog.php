<?php include "pages/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-success text-white">All Blog Info</div>

                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result;?></h4>

                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Blog Title</th>
                                    <th>Author Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($blogs as $blog){ ?>

                                <tr>
                                    <td><?php echo $blog["title"]?></td>
                                    <td><?php echo $blog["title"]?></td>
                                    <td><?php echo $blog["title"]?></td>
                                    <td><?php echo $blog["title"]?></td>

                                    <td>
                                        <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include "pages/footer.php"?>


