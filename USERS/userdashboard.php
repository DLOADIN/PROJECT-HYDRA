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
  error_reporting(0);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/newfriend.css">
  <link rel="shortcut icon" href="../images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <title>DASHBOARD</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  
  <div class="sidebar">
    <div class="logo">
      <img src="../images/Captured.JPG" alt="">
    </div>
      <ul class="menu">
        <li>
          <a href="userdashboard.php">
            <ion-icon name="home-outline"></ion-icon>
            <span>DASHBOARD</span>
          </a>
        </li>
        <li>
          <a href="orders.php">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span>ORDERS</span>
          </a>
        </li>
        <li>
          <a href="stock.php">
            <ion-icon name="pricetags-outline"></ion-icon>
            <span>STOCK</span>
          </a>
        </li>
        <li>
          <a href="transactions.php">
            <ion-icon name="git-compare-outline"></ion-icon>
            <span>TRANSACTIONS</span>
          </a>
        </li>
        <li>
          <a href="userprofile.php">
            <ion-icon name="person-circle-outline"></ion-icon>
            <span>PROFILE</span>
          </a>
        </li>
        <li>
          <a href="../website.php">
            <ion-icon name="planet-outline"></ion-icon>
            <span>HOME SITE</span>
          </a>
        </li>
    </ul>
  </div>

    <div class="main-content" id="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <h1>Report/Dashboard</h1>
        </div>
        <div class="user-info">
          <div class="gango">
          <h3 class="my-account-header">USER 001</h3>
          <p>USER PANEL</p></div>  
          <button name="submit" type="submit" class="btn-3" >
            <a href="logout.php">LOGOUT</a>
          </button>
        </div>       
         </div>
         <div class="fire-base">
          <div class="base-1">
            <h3>TOTAL ORDERS</h3>
            <div class="grill">
            <div class="peng-black">
              <i class="fa-solid fa-list"></i></div>
            <h1>
              357
              <!--  -->
              </h1></div>
          </div>
          <div class="base-1">
          <h3>TOTAL DELIVERED</h3>
          <div class="grill">
            <div class="peng-black">
              <i class="fa-solid fa-box"></i></div>
            <h1>
              357
              <!--  -->
              </h1></div>
          </div>
          <div class="base-1">
          <h3>TOTAL CANCELLED</h3>
          <div class="grill">
            <div class="peng-black">
              <i class="fa-solid fa-xmark"></i></div>
            <h1>
              357
              <!-- -->
              </h1></div>
          </div>
          <div class="base-1">
          <h3>TOTAL REVENUE</h3>
          <div class="grill">
            <div class="peng-black">
              <i class="fa-solid fa-bag-shopping"></i></div>
            <h1>
              357
              <!---->
              </h1></div>
          </div>
         </div>
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../JS/file.js"></script>
</body>
</html>
