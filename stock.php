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
  <title>STOCK</title>
  <script src="./JS/file.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <?php
  error_reporting(0);
  ?>
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
          <h1>Stock</h1>
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
              <TH>TOOL NAME</TH>
              <th>TYPE</th>
              <th>NUMBER OF ITEMS</th>
              <th>DATE</th>
              <th>TOOL DESCRIPTION</th>
              <th>PRICE </th>
              <th>MODIFY</th>
              <th>DELETE</th>
              </tr>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM `tool`");
            $row = mysqli_num_rows($sql);
            if($row){
              while($row=mysqli_fetch_array($sql))
              { 
            ?>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['u_toolname']?></td>
              <td><?php echo $row['u_itemsnumber']?></td>
              <td><?php echo $row['u_type']?></td>
              <td><?php echo $row['u_date']?></td>
              <td><?php echo $row['u_tooldescription']?></td>
              <td><?php echo $row['u_price']?></td>
              <td>  
                <button class="lebutton"><a href="stock.php?id=<?php echo $row['id']?>">UPDATE</a></button>
              </td>
              <td>  
              <button class="lebutton" onclick="alert('Are You Really Sure You Want To Delete This')"><a style="color: red;" href="./delete/deletestock.php?id=<?php echo $row['id']?>">DELETE</a></button>
              </td>
              </td>
              <?php
            }
          }
              ?>
          </tr>
        </table>
        </div>

        <div class="graded" id="graded">
          <?php
          if(isset($_GET['id'])){
          $id=$_GET['id'];
        }
          $sql=mysqli_query($con,"SELECT * FROM tool WHERE id='$id' ");
          $row = mysqli_fetch_array($sql);
          ?>
          <form action="" method="post">
            <div class="real-form">
              <label for="">Tool Name</label>
              <input type="text" name="u_toolname" placeholder="NAMES OF THE TOOL" value="<?php echo $row['u_toolname']?>" required>
              <label for="">Number Of Items</label>
              <input type="number" name="u_itemsnumber" placeholder="RWF" value="<?php echo $row['u_itemsnumber']?>" required>
            </div>
            <div class="real-form">
              <label for="">TYPE</label>
              <input type="text" name="u_type" placeholder="SHOW TYPE" value="<?php echo $row['u_type']?>" required>
              <label for="">Tool Description</label>
              <input type="text" name="u_tooldescription" placeholder="Please Tell Us More About The Product/Tool" value="<?php echo $row['u_tooldescription']?>" required>
            </div>
            <div class="real-form">
              <label for="">PRICE</label>
              <input type="text" name="u_price" value="<?php echo $row['u_price']?>">
              <label for="">ITEM REGISTERED DATE</label>
              <input type="text" name="u_date" class="moon-walk" value="<?php echo $row['u_date']?>" readonly>
            </div>
        
            <div class="checkbox">
              <input type="checkbox" name="" id="" required>
              <h3>I confirm that I have read and accepted the terms and conditions and privacy policy</h3>
            </div>
            <div id="btn-2">
              <button name="submit" type="submit" class="button-1">SAVE</button>
            </div>
          </form></div>
        </div>
         </div>
         
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<!-- ANYTHING THAT IS IN PHP !!! PLEASE DON'T MESS WITH IT -->
<?php
  if(isset($_POST['submit'])){
    $toolname = $_POST['u_toolname'];
    $nitems = $_POST['u_itemsnumber'];
    $type = $_POST['u_type'];
    $tooldescription = $_POST['u_tooldescription'];
    $date = date('Y-m-d',strtotime($_POST['u_date']));
    $price= $_POST['u_price'];
    $sql=mysqli_query($con,"UPDATE tool SET u_toolname='$toolname', u_itemsnumber='$nitems', u_type='$type', u_tooldescription='$tooldescription', u_date='$date', u_price='$price' WHERE id='$id' ");
    header('location:stock.php');
    
    if($sql){
     echo "<script>alert('PLEASE RELOAD THE PAGE IF YOU FIND ANY ERROR')</script>" ; 
    }
  }
?>
