<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM booking WHERE book_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-booking.php');
}
else{
    echo "failed.";
}




?>