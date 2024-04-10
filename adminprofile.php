<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `admin` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginadmin.php');
  } 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/newfriend.css">
  <link rel="stylesheet" href="./CSS/form.css">
  <link rel="stylesheet" href="./CSS/gravity.css">
  <link rel="shortcut icon" href="./images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <title>ADMIN PROFILE</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="./JS/file.js"></script>
</head>
<body>
  
  <div class="sidebar">
    <div class="logo">
      <img src="./images/Captured.JPG" alt="">
    </div>
      <ul class="menu">
        <li>
          <a href="admindashboard.php">
            <ion-icon name="home-outline"></ion-icon>
            <span>DASHBOARD</span>
          </a>
        </li>
        <li>
          <a href="addtool.php">
            <ion-icon name="add-outline"></ion-icon>
            <span>ADD TOOL</span>
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
            <span class="Transaction">TRANSACTIONS</span>
          </a>
        </li>
        <li>
          <a href="adminprofile.php">
            <ion-icon name="person-circle-outline"></ion-icon>
            <span>PROFILE</span>
          </a>
        </li>
        <li>
          <a href="website.php">
            <ion-icon name="planet-outline"></ion-icon>
            <span>HOME SITE</span>
          </a>
        </li>
    </ul>
  </div>

    <div class="main-content" id="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <h1>ADMIN PROFILE</h1>
        </div>
        <div class="user-info">
          <div class="gango">
          <h3 class="my-account-header">Kelly Nikuze</h3>
          <p>Manager</p></div>  
          <button name="submit" type="submit" class="btn-3" >
            <a href="logout.php">LOGOUT</a>
          </button>
        </div>       
         </div>
         <div class="duke">

          <div class="hastings">
            <img src="./images/_ANTINOUS_ _ Oil on canvas _ 120 x 150 cm.jpg" alt="">
            <?php $sql=mysqli_query($con,"SELECT u_name FROM `admin`");
            $row = mysqli_num_rows($sql);
            if($row){
              while($row=mysqli_fetch_array($sql))
              { ?>
            <h2><?php echo $row['u_name']?></h2>
            <?php 
              }
            }
            ?>
            <h3>ADMIN</h3>
            <hr>
            <h3><i class="fa-solid fa-person"></i>UI - INTERN</h3>
            <h3><i class="fa-solid fa-ban"></i>ON TEAK</h3>
            <hr>
            <h3><i class="fa-solid fa-phone"></i>+91 7048119291</h3>
            <h3><i class="fa-regular fa-envelope"></i>yghori@asite.com</h3>
            <h3><i class="fa-regular fa-images"></i>PDT -I</h3>
          </div>

          <div class="hastings-1">
            <H1>YOUR OVERALL INFORMATION</H1>
            <?php
          if(isset($_GET['id'])){
          $id=$_GET['id'];
        }
          $sql=mysqli_query($con,"SELECT * FROM `admin` WHERE id='$id' ");
          $row = mysqli_fetch_array($sql);
          ?>
            <form action="" method="post" class="formation">
              <div class="real-form">
                <label for="">YOUR NAMES</label>
                <input type="text" name="u_name" value="<?php echo $row['u_name']?>" required>
                <label for="">E-MAIL</label>
                <input type="email" name="u_email" value="<?php echo $row['u_email']?>" required>
              </div>
              <div class="real-form">
                <label for="">PHONENUMBER</label>
                <input type="text" name="u_phonenumber" required maxlength="15" value="<?php echo $row['u_phonenumber']?>">
                <label for="">ADDRESS</label>
                <input type="text" name="u_address" required value="<?php echo $row['u_address']?>">
              </div>
              <div class="real-form">
                <label for="">PASSWORD</label>
                <input type="text" name="u_password" required value="<?php echo $row['u_password']?>">
                <button name="submit" type="submit" class="btn-2" id="btns">SAVE</button></div>
            </form>
          </div>

         </div>
        </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $phonenumber = $_POST['u_phonenumber'];
    $address = $_POST['u_address'];
    $password = $_POST['u_password'];
    $sql=mysqli_query($con,"UPDATE `admin` SET u_name='$name', u_email='$email', u_phonenumber='$phonenumber',u_address='$address',u_password='$password' WHERE id='$id' ");
    
    if($sql){
      echo "<script>alert('Updated Successfully')</script>";
    }
    else{
      echo "<script>alert('failed to update')</script>";
    }
  }
?>
