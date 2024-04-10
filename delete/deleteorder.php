<?php
require '../connection.php';
$id=$_GET['id'];
$sql=mysqli_query($con,"DELETE FROM `order` WHERE id='$id'");
header('location:../orders.php');
?>