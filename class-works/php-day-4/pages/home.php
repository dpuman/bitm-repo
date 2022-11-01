
<?php include 'header.php' ?>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <?php
//                print_r($students);
                foreach ($students as $student) {

                ?>



                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/team-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $student["name"] ?></h5>
                            <p class="card-text">
                                <p> ID:<?php echo  $student["id"] ?> </p>
                                <p> Profession:<?php echo  $student["profession"] ?> </p>
                                <p> Mobile:<?php echo  $student["mobile"] ?> </p>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>

                
                





            </div>
        </div>
    </section>

<?php include 'footer.php' ?>

