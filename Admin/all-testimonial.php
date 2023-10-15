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
                                        <i class="fab fa-gg-circle"></i>All Client Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add-testimonial.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add New Client</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                    <th>id</th>
                                      <th>Client Name</th>
                                      <th>Client Profession</th>
                                      <th>Client Details</th>
                                      <th>Image</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                 
                                  <?php
                                  $id=1;
                                  
                                        $sel="SELECT * FROM  testimonial ORDER BY  client_id DESC";
                                        $Q = mysqli_query($con,$sel);
                                        while($data=mysqli_fetch_assoc($Q)){


                                  ?>
                                    <tr>
                                    <td><?php echo $id;  $id++; ?></td>
                                      <td><?= $data['client_name'];?></td>
                                      <td><?= $data['client_prof'];?></td>
                                      <td><?=substr($data['client_details'],0,40); ?>...</td>
                                      
                                
                                      
                                      <td>
                                        <?php if($data['client_photo']!=''){?>
                                        <img height="40" class="img200" src="uploads/<?= $data['client_photo']; ?>" alt="client"/>
                                        <?php }   else{ ?>
                                      
                                          <img height="40" src="images/avatar.jpg" alt="avatar"/>
                                        <?php } ?>
                                      </td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-testimonial.php?v=<?=$data['client_id'];?>">View</a></li>
                                              <li><a class="dropdown-item" href="edit-testimonial.php?e=<?=$data['client_id'];?>">Edit</a></li>
                                             
                                              <li><a class="dropdown-item" href="delete-testimonial.php?d=<?=$data['client_id'];?>">Delete</a></li>
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