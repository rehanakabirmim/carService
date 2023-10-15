<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){


get_header();
get_sitebar();
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
                                        <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Link</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                    <th>id</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Service Name</th>
                                      <th>Date</th>
                                      <th>Special Request</th>
                                      <th>Manage</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                 
                                  <?php
                                  $id=1;
                                  
                                        $sel="SELECT * FROM  booking   ORDER BY  book_id DESC";
                                        $Q = mysqli_query($con,$sel);
                                        while($data=mysqli_fetch_assoc($Q)){


                                  ?>
                                    <tr>
                                    <td><?php echo $id;  $id++; ?></td>
                                      <td><?= $data['book_name'];?></td>
                                      <td><?=$data['book_email']; ?></td>
                                      <td><?=$data['book_ser_name'];?></td>
                                      <td><?=$data['book_ser_date'];?></td>
                                      <td><?=substr($data['book_req'],0,50);?>...</td>

                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-booking.php?v=<?=$data['book_id'];?>">View</a></li>
                                              
                                              <li><a class="dropdown-item" href="delete-booking.php?d=<?=$data['book_id'];?>">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                    
                                    <?php }?>
                                  </tbody>
                                </table>
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