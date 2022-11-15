<?php
    if (!isset($_SESSION["id"])){
        header('location:action.php?page=login');

    }

?>

<?php include "pages/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Welcome to Dashboard</h1>

            </div>


        </div>
    </div>
</section>
<?php include "pages/footer.php"?>


