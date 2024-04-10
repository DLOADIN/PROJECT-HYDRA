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
  <link rel="shortcut icon" href="./images/Capture.JPG" type="image/x-icon" class="link">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="./JS/file.js"></script>
  <title>ADD TOOL</title>
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
            <span>TRANSACTIONS</span>
          </a>
        </li>
        <li>
          <a href="report.php">
            <ion-icon name="bar-chart-outline"></ion-icon>
            <span>REPORTS</span>
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
          <h1>Add Tools</h1>
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
         <div class="graded" id="graded">
          <form action="" method="post">
            <div class="real-form">
              <label for="">Tool Name</label>
              <input type="text" name="u_toolname" placeholder="NAMES OF THE TOOL" required>
              <label for="">Number Of Items</label>
              <input type="number" name="u_itemsnumber" placeholder="ONE - MANY" required>
            </div>
            <div class="real-form">
              <label for="">TYPE</label>
              <input type="text" name="u_type" placeholder="SHOW TYPE" required>
              <label for="">Tool Description</label>
              <input type="text" name="u_tooldescription" placeholder="Please Tell Us More About The Product/Tool" required>
            </div>
            <div class="real-form">
            <label for="">PRICE</label>
              <input type="number" name="u_price" placeholder="RWF">
              <label for="">TODAY'S DATE</label>
              <input type="text" name="u_date" class="moon-walk" value="<?php echo date('Y-m-d')?>" readonly>
            </div>
        
            <div class="checkbox">
              <input type="checkbox" name="" id="" required>
              <h3>I confirm that I have read and accepted the terms and conditions and privacy policy</h3>
            </div>
            <div id="btn-2">
              <button name="submit" type="submit" class="button-1">SUBMIT</button>
            </div>
          </form></div>
        </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $toolname = $_POST['u_toolname'];
    $nitems = $_POST['u_itemsnumber'];
    $type = $_POST['u_type'];
    $tooldescription = $_POST['u_tooldescription'];
    $date = date('Y-m-d',strtotime($_POST['u_date']));
    $price= $_POST['u_price'];
    $sql=mysqli_query($con,"INSERT INTO `tool` VALUES('','$toolname','$nitems','$type','$tooldescription','$date','$price')");
    
    if($sql){
      echo "<script>alert('Recorded Successfully')</script>";
    }
    else{
      echo "<script>alert('failed to record')</script>";
    }
  }
?>