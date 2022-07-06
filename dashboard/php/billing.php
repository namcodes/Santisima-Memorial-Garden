<?php
session_start();
include_once('../../wp-php/conn.php');

$user = $conn->real_escape_string($_POST['user']);

$fname = $conn->real_escape_string($_POST['first_name']);
$lname = $conn->real_escape_string($_POST['last_name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = htmlspecialchars($conn->real_escape_string($_POST['address']));
$postal = $conn->real_escape_string($_POST['postal_code']);

$redirect = header("Location: ../billings.php");

if(isset($_POST['billing-details'])){
    $billing_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");

    if($billing_query->num_rows > 0){
        //Update Details
        $update_billing = $conn->query("UPDATE tbl_billings SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', contact = '{$contact}', address = '{$address}', postal = '{$postal}' WHERE user = '{$user}'");
        if($update_billing){
            header("Location: ../packages.php");
        }else{
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }else{
        //Insert new record
        $insert_billing = $conn->query("INSERT INTO tbl_billings (user, fname, lname, email, contact, address, postal) VALUES ('{$user}', '{$fname}', '{$lname}', '{$email}', '{$contact}', '{$address}', '{$postal}')");

        if($insert_billing){
            header("Location: ../packages.php");
        }else{
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }
}
?>