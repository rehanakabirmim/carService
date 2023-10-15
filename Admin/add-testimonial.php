<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();


if(!empty($_POST)){
  // print_r($_POST);
  $name = $_POST['name'];
  $profession = $_POST['profession'];
  $details = $_POST['details'];
  $image=$_FILES['pic'];
  $imageName = '';

  if($image['name']!=''){
  $imageName='testimonial_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

 $insert= "INSERT INTO `testimonial`( `client_name`, `client_prof`, `client_details`, `client_photo`) VALUES ('$name','$profession','$details','$imageName')";
 if(!empty($name)){
      if(mysqli_query($con,$insert)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
        echo "client picture upload success.";
      }else{
        echo "client picture upload failed.";
      }
    }else{
      echo "Please enter client name";
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
                                          <input type="text" class="form-control form_control" id="" name="name">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Client Profession</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="profession">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Client Details</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="details">
                                        </div>
                                      </div>
                                      
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Client Image</label>
                                        <div class="col-sm-7">
                                          <input type="File" class="form-control form_control" id="" name="pic">
                                        </div>
                                      </div>

                                      
                                  <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark">UPLOAD</button>
                                  </div>  
<?php
  get_footer();
  }else{
    header('Location: index.php');
  }
?>