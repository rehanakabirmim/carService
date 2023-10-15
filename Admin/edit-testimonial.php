<?php
require_once("functions/function.php");
needLogged();
if ($_SESSION['role'] == '1') {
  get_header();
  get_sitebar();
  $id = $_GET['e'];
  $selupd = "SELECT * FROM testimonial WHERE client_id = $id";
  $Q = mysqli_query($con, $selupd);
  $data = mysqli_fetch_assoc($Q);

  if (!empty($_POST)) {
    // print_r($_POST);
    $name = $_POST['name'];
    $profession = $_POST['profession'];
    $details = $_POST['details'];

    $image = $_FILES['pic'];

    $update = "UPDATE `testimonial` SET `client_name`='$name',`client_prof`='$profession',`client_details`='$details' WHERE client_id='$id'"; 
    if (!empty($name)) {
      if (!empty($profession)) {

        if (mysqli_query($con, $update)) {

          // echo " successfully update user information.";
          if ($image['name'] != '') {
            $imageName = 'client_' . time() . '_' . rand(100000, 1000000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $updimage = "UPDATE testimonial SET client_photo ='$imageName' WHERE client_id='$id'";
            if (mysqli_query($con, $updimage)) {
              move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
            }
            header('Location:view-testimonial.php?v=' . $id);
          } else {
            "Client image update failed";
          }

          header('Location:view-testimonial.php?v=' . $id);
        } else {
          echo "oops! Client information update failed!";
        }

      } else {
        echo "Please enter your name.";
      }

    } else {
      echo "Please enter your profession.";
    }
  }
  

  ?>


  <div class="row">
    <div class="col-md-12 ">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-8 card_title_part">
                <i class="fab fa-gg-circle"></i>Testimonial Registration
              </div>
              <div class="col-md-4 card_button_part">
                <a href="all-testimonial.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All New Client </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Client Name<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="name" value="<?= $data['client_name']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Client Profession</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="profession" value="<?= $data['client_prof']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Client Details</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="details" value="<?= $data['client_details']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
              <div class="col-sm-4">
                <input type="file" class="form-control form_control" id="" name="pic">
              </div>
            </div>
          </div>
          <div class="col-md-2 offset-5">
            <?php if ($data['client_photo'] != '') { ?>
              <img height="50" class="img200" src="uploads/<?= $data['client_photo']; ?>" alt="client" />
            <?php } else { ?>

              <img height="50" src="images/avatar.jpg" alt="avatar" />
            <?php } ?>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
          </div>

  <?php
      get_footer();
      }else{
        header('Location:index.php');
      }
      ?>