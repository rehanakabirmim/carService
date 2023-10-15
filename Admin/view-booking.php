<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();
$id = $_GET['v'];
$sel="SELECT * FROM booking NATURAL JOIN roles WHERE book_id = $id";
$Q =mysqli_query($con , $sel);
$data=mysqli_fetch_assoc($Q);




?>
  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>All Service Booking Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="all-booking.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Booking</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <table class="table table-bordered table-striped table-hover custom_view_table">
                                          <tr>
                                            <td>Name</td>  
                                            <td>:</td>  
                                            <td><?= $data['book_name']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Email</td>  
                                            <td>:</td>  
                                            <td><?= $data['book_email']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Service Name</td>  
                                            <td>:</td>  
                                            <td><?= $data['book_ser_name']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Date</td>  
                                            <td>:</td>  
                                            <td><?= $data['book_ser_date']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Special Request</td>  
                                            <td>:</td>  
                                            <td><?= $data['book_req']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Role</td>  
                                            <td>:</td>  
                                            <td><?= $data['role_name']?></td>  
                                          </tr>
                                          
                                        </table>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
<?php
get_footer();
}else{
  header('Location:index.php');
}
?>                                            