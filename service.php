<?php
require_once('functions/function.php');
get_header();

?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"> Our Services </h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">

                    <?php

                    $select_qurry = "SELECT * FROM `services`";

                    $allService = mysqli_query($con, $select_qurry);

                    while ($services = mysqli_fetch_assoc($allService)) {

                    ?>

                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 <?= ($services['service_id'] == 1) ? 'active' : '' ?>" data-bs-toggle="pill" data-bs-target="#tab-pane-<?= $services['service_id'] ?>" type="button">
                            <!-- <i class="fa fa-car-side fa-2x me-3"></i> -->
                            <h4 class="m-0"><?= $services['service_title'] ?></h4>
                        </button>

                    <?php
                    }
                    ?>




                </div>
            </div>

            <div class="col-lg-8">



                <div class="tab-content w-100">

                    <?php

                    $select_qurry = "SELECT * FROM `services`";

                    $allService = mysqli_query($con, $select_qurry);

                    while ($services = mysqli_fetch_assoc($allService)) {

                    ?>

                        <div class="tab-pane fade show <?= ($services['service_id'] == 1) ? 'active' : '' ?>" id="tab-pane-<?= $services['service_id'] ?>">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="admin/uploads/<?= $services['service_photo'] ?>" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3"><?= $services['service_title'] ?></h3>
                                    <p class="mb-4"><?= $services['service_details'] ?></p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    <a href="<?= $services['service_url'] ?>" class="btn btn-primary py-3 px-5 mt-3"><?= $services['service_button'] ?><i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>



                    <?php
                    }
                    ?>




                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->





<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase"> Testimonial </h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">

            <?php

            $select_qurry = "SELECT * FROM `testimonial`";

            $allTestimonial = mysqli_query($con, $select_qurry);

            while ($testimonial = mysqli_fetch_assoc($allTestimonial)) {

            ?>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="admin/uploads/<?= $testimonial['client_photo'] ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0"><?= $testimonial['client_name'] ?></h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"><?= $testimonial['client_details'] ?></p>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php
get_footer();

?>