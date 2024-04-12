<title>checkout</title>
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
$customer_phone = 2507;
$transaction_id = rand(1, 999999) . 'code' . date('ymdhis') . rand(10000, 999999);
?>
<form class="FinalForm" method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
    <!-- <input type="hidden" name="public_key" value="FLWPUBK_TEST-626c4203d50e941adcb56ab4ea1a2368-X" /> -->
    <input type="hidden" name="public_key" value="FLWPUBK-fd9a72fe52fbf0bd373323b44d7e2097-X" />
    <input type="hidden" name="customizations[title]" value="BAFRACO" />
    <input type="hidden" name="customizations[description]" value="Pass Easily" />
    <input type="hidden" name="customizations[logo]" value="" />
    <input type="hidden" name="customer[email]" value="<?php echo $row['u_email']; ?>" />
    <input type="hidden" name="customer[name]" value="<?php echo $row['u_name']; ?>" />
    <input type="hidden" name="tx_ref" value="<?php echo $transaction_id; ?>" />
    <input type="hidden" name="amount" value="<?php 
    $O_id=$_GET['o_id'];
    $sql = mysqli_query($con, "SELECT u_totalprice AS total FROM `order` WHERE id='$O_id'");
    $row = mysqli_fetch_array($sql);
    $total = $row['total'];
    echo $total;
    ;?>" />
    <input type="hidden" name="currency" value="RWF" />
    <input type="hidden" name="redirect_url" value="/project-hydra/users/redirect.php" />
    <div class="PayButton">
    <h1>JUST PRESS THE BUTTON</h1>
        <button type="submit" class="GOSHI" id="start-payment-button">PURCHASE</button>
    </div>
</form>
<style>
    .payButton{
        border:2px solid black;
        border-top: 15px solid black;
        border-bottom: 15px solid black;
        border-radius:30vh;
        padding:5vh;
        margin:30vh;
        height: fit-content;
    }
    button{
        padding:1rem;
        border-radius:10px;
        background-color: #0B3051;
        color: azure;
        
        margin-left:61vh;
    }
    h1{
        text-align: center;
        margin-left:1vh
    }
</style>