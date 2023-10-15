<?php
require_once('functions/function.php');


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-2 offset-lg-1">
                  <h3 class="mb-3">Forgot Password</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 pe-0">
                                <div class="form-left h-100 py-5 px-5">

                                <?php
                                  if($_POST){
                                    $email = $_POST['email'];
                                    $sel="SELECT * FROM users WHERE user_email='$email'";
                                    $Q=mysqli_query($con,$sel);
                                    $data=mysqli_fetch_assoc($Q);
                                     $data['user_email'];

                                     if($data){
                                        // $to = $email;
                                          // $subject = "UY LAB Portal Reset Password.";
                                          // $txt = "www.uylad.org/reset-password.php";
                                          // $headers = "From: noreply@uylab.org" . "\r\n" .
                                          // "CC: system@uylab.org";
                                          //
                                          // mail($to,$subject,$txt,$headers);
                                          header('Location: reset-password.php?rp='.$data['user_slug']);
                                      
                                            }else{
                                            echo "enter correct email address.";
                                            }
                                  }



                                ?>
                               
                                    <form action="" method="post" class="row g-4">
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                <input type="text" name="email" class="form-control" placeholder="Enter email">
                                            </div>
                                        </div>

                                    

                                        <div class="col-sm-6">
                                            <a href="#" class="float-end text-primary">Forgot Password?</a>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4 text-center">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>