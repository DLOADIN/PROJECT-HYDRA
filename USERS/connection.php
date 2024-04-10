<?php
  session_start();
  $con=mysqli_connect('localhost','root','','bafraco');

  if (!$con){
  die (mysqli_error($con));
}
?>