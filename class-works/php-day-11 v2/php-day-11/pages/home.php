<?php include "pages/header.php"?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                    <?php foreach ($blogs as $blog) {?>
                    <div class="col-md-3 mb-3">

                        <div class="card h-100">
                            <img src="<?php echo $blog["image"]?>" alt="" class="card-img-top" height="250" style="object-fit: cover">

                            <div class="card-body">
                                <h3><?php echo $blog["title"]?></h3>
                                <h5><?php echo $blog["author"]?></h5>
                                <hr>
                                <a href="" class="btn btn-outline-success">Read more..</a>
                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
<?php include "pages/footer.php"?>


