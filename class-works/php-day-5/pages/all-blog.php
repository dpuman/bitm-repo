<?php include "pages/header.php"?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog){ ?>

                <div class="col-md-3 col-sm-4 mb-3">
                    <div class="card shadow border-0 h-100 rounded-0">
                        <img src="<?php echo $blog["image"];?>" alt="" class="card-img-top rounded-0" height="200px" >
                        <div class="card-header"><h4><?php echo $blog["title"];?></h4></div>
                        <div class="card-body">
                            <p><?php echo substr($blog["description"],0,156).". . .";?></p>

                        </div>
                        <div class="card-footer">
                            <a href="action.php?page=details&&id=<?php echo $blog["id"]?>" class="btn btn-outline-danger px-5">Read More</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </section>

<?php include "pages/footer.php"?>