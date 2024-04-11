<?php
// PHP variables
$customer_id = $_SESSION["id"];
$customer_phone = 2507;
$transaction_id = rand(1, 999999) . 'code' . date('ymdhis') . rand(10000, 999999);
?>
<form class="FinalForm" method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
    <input type="hidden" name="public_key" value="FLWPUBK-fd9a72fe52fbf0bd373323b44d7e2097-X" />
    <input type="hidden" name="customizations[title]" value="BAFRACO" />
    <input type="hidden" name="customizations[description]" value="Pass Easily" />
    <input type="hidden" name="customizations[logo]" value="" />
    <input type="hidden" name="customer[email]" value="<?php echo $row['u_email']; ?>" />
    <input type="hidden" name="customer[name]" value="<?php echo $row['u_name']; ?>" />
    <input type="hidden" name="tx_ref" value="<?php echo $transaction_id; ?>" />
    <input type="hidden" name="amount" value="<?php echo 1000; ?>" />
    <input type="hidden" name="currency" value="RWF" />
    <input type="hidden" name="redirect_url" value="/." />
    <div class="PayButton">
        <button type="submit" class="GOSHI" id="start-payment-button">PURCHASE</button>
    </div>
</form>