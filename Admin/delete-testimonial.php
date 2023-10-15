<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM testimonial WHERE client_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-testimonial.php');
}
else{
    echo "failed.";
}




?>