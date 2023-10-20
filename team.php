<?php
require_once("functions/function.php");
get_header();

?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Technicians</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Technicians</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">Our Technicians </h6>
            <h1 class="mb-5">Our Expert Technicians</h1>
        </div>
        <div class="row g-4">

            <?php

            $select_qurry = "SELECT * FROM `team`";

            $allTeam = mysqli_query($con, $select_qurry);

            while ($team = mysqli_fetch_assoc($allTeam)) {

            ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/uploads/<?= $team['member_photo'] ?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="<?= $team['member_facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="<?= $team['member_twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href="<?= $team['member_instragram'] ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0"><?= $team['member_name'] ?></h5>
                            <small><?= $team['member_designation'] ?></small>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- Team End -->

<?php
get_footer();


?>