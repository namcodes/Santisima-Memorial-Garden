<?php
include_once("../wp-php/session.php");
$billing_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$client}' LIMIT 1");

if($billing_query->num_rows > 0){
    $transaction_query = $conn->query("SELECT * FROM tbl_transactions WHERE user = '{$client}' LIMIT 1");
    if($transaction_query->num_rows > 0){
        header("Location: dashboard.php");
    }else{
        header("Location: packages.php");
    }
}else{
    header("Location: billings.php");
}
?>