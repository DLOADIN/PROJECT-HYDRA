<!-- this is the redirect page -->

<?php
if (isset($_GET['status']) && $_GET['status'] == 'successful') {
    // What happens if the transaction is successfull
    
    // After all the quelies redirect to any page of you choise using
    echo '<script type="text/javascript">window.location.href="../pagename.php"</script>';
}
if (isset($_GET['status']) && $_GET['status'] == 'cancelled') {
    // What happens if the transaction has been cancelled

    // After all the quelies redirect to any page of you choise using
    echo '<script type="text/javascript">window.location.href="../pagename.php"</script>';
}
if (isset($_GET['status']) && $_GET['status'] == 'failed') {
    // What happens if the transaction has been failed

    // After all the quelies redirect to any page of you choise using
    echo '<script type="text/javascript">window.location.href="../pagename.php"</script>';
}
?>