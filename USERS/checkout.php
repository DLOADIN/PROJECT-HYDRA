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
  <link rel="shortcut icon" href="../images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="../JS/file.js"></script>
  <title>CHECKOUT</title>
  <style>
    .give ion-icon{
      font-size:40px
    }
  </style>
</head>
<body>
  <div class="flatter">
    <div class="flatter-1">
      <img src="../images/Captured.JPG" alt=""><br>
      <div class="give">
        <ion-icon name="pricetags-outline"></ion-icon>
        <h1>Thank You For Buying With Us</h1>
      </div>
      <p>To finalize your subscription, kindly complete your payment using a discount code if any.!</p>
      <div class="downish-1">
    <hr class="cry">
  </div> 
  </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>