<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();
$id = $_GET['e'];
$selupd = "SELECT * FROM services WHERE service_id = $id";
$Q = mysqli_query($con, $selupd);
$data = mysqli_fetch_assoc($Q);

if (!empty($_POST)) {
  // print_r($_POST);
  $title = $_POST['title'];
  $details = $_POST['details'];
  $btn = $_POST['btn'];
  $url = $_POST['url'];
 
  $image=$_FILES['pic'];

  $update = "UPDATE `services` SET `service_title`='$title ',`service_details`='$details',`service_button`='$btn',`service_url`='$url',`service_photo`='$image' WHERE service_id = $id";
  if (!empty($title)) {
    if (!empty($details)) {

        if (mysqli_query($con, $update)) {

          // echo " successfully update user information.";
          if ($image['name'] != '') {
            $imageName = 'service_' . time() . '_' . rand(100000, 1000000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $updimage = "UPDATE services SET 	service_photo='$imageName' WHERE service_id='$id'";
            if (mysqli_query($con, $updimage)) {
              move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
            }
              header('Location:view-service.php?v=' . $id);
            } else {
              "service image update failed";
            }
          
          header('Location:view-service.php?v=' . $id);
        } else {
          echo "oops!Service information update failed!";
        }
   
    } else {
      echo "Please enter service subtitle.";
    }
  
  } else {
    echo "Please enter service title.";
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
              <i class="fab fa-gg-circle"></i>UPDATE Service INFORMATION
            </div>
            <div class="col-md-4 card_button_part">
              <a href="all-service.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Service</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Service Title<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="title" value="<?= $data['service_title']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Service Details</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="details" value="<?= $data['service_details']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Service button<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
          <input type="text" class="form-control form_control" id="" name="btn" value="<?= $data['service_button']; ?>" >
             </div>
          </div>  
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Service URL<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="url" value="<?= $data['service_url']; ?>">
            </div>
          </div>
          


         
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Service Image</label>
            <div class="col-sm-4">
              <input type="file" class="form-control form_control" id="" name="pic">
            </div>
          </div>
        </div>
        <div class="col-md-2 offset-5">
          <?php if ($data['service_photo'] != '') { ?>
            <img height="50" class="img200" src="uploads/<?= $data['service_photo']; ?>" alt="service" />
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