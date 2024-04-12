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
  error_reporting(0);
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
  <title>ORDERS</title>
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
          <h1>Report/Orders</h1>
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
         <div class="new-amounts"> 
          <div class="title">
          <h2 class="h2">ENTRY/STOCK DATA</h2>
          </div><table><tr>
              <th>#</th>
              <TH>USER NAME</TH>
              <TH>TOOL NAME</TH>
              <th>TYPE</th>
              <th>NUMBER OF ITEMS</th>
              <th>TOOL DESCRIPTION</th>
              <th>PRICES</th>
              <th>TOTAL PRICE</th>
              <th>DATE</th>
              <th>DELETE</th>
              </tr>
            <?php
             $sql = "SELECT `order`.*, user.u_name FROM `order`INNER JOIN user ON `order`.user_id = user.id";
                $result = mysqli_query($con, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['u_name']?></td>
              <td><?php echo $row['u_toolname']?></td>
              <td><?php echo $row['u_itemsnumber']?></td>
              <td><?php echo $row['u_type']?></td>
              <td><?php echo $row['u_tooldescription']?></td>
              <td><?php echo $row['u_price']?></td>
              <td><?php echo $row['u_totalprice']?></td>
              <td><?php echo $row['u_date']?></td>
              <td>  
              <button class="lebutton" onclick="alert('Are You Really Sure You Want To Delete This')"><a style="color: red;" href="./delete/deleteorder.php?id=<?php echo $row['id']?>">DELETE</a></button>
              </td>
              <?php
          }
        }
              ?>
          </tr>
        </table>
        </div>
         </div>
         </div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
