<?php
require_once("functions/function.php");
$setInactiveSQL = "UPDATE `banners` SET `ban_status`='0'";
              mysqli_query($con,$setInactiveSQL);
$id = $_GET['aId'];
$setInactiveSQL = "UPDATE `banners` SET `ban_status`=1  WHERE `ban_id` = $id";
if (mysqli_query($con, $setInactiveSQL)) {
    header('Location: all-banner.php');

}