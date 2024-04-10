<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `user` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginuser.php');
  } 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/website.CSS">
  <link rel="stylesheet" href="../CSS/payment-api.css">
  <link rel="shortcut icon" href="../images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="../JS/file.js"></script>
  <title>PAYMENT SUCCESSFUL</title>
</head>
<body>
  <div class="cried">
    <div class="fale">
    <i class="fa-solid fa-circle-exclamation"></i>
    <h1>PAYMENT FAILED</h1><br><br>
    <h3>Hey There. There must have an issue  <br> please try to contact the team or the admin</h3>
    <button class="buttton"><a href="../website.php">CALL US</a></button>
  </div>
  </div>


  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>