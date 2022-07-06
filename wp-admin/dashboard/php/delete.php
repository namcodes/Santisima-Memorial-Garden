<?php
session_start();
include_once('../../../wp-php/conn.php');

foreach ($_GET as $key => $val) {
    switch ($key) {
            //Delete user account
        case 'delete_user': {
                $delete_user = $conn->query("DELETE FROM tbl_users WHERE id = '{$_GET['delete_user']}'");
                if ($delete_user > 0) {
                    header("Location: ../users.php");
                } else {
                    $_SESSION['error'] = "Something went wrong.";
                    header("Location: ../users.php");
                }
                break;
            }
            //Delete dead record
        case 'delete_record': {
                $delete_record = $conn->query("DELETE FROM tbl_records WHERE id = '{$_GET['delete_record']}'");
                if ($delete_record > 0) {
                    header("Location: ../records.php");
                } else {
                    $_SESSION['error'] = "Something went wrong.";
                    header("Location: ../records.php");
                }
                break;
            }
            //Delete transaction
        case 'delete_transaction': {
                $delete_transaction = $conn->query("DELETE FROM tbl_transactions WHERE token = '{$_GET['delete_transaction']}'");
                if ($delete_transaction > 0) {
                    header("Location: ../transactions.php");
                } else {
                    $_SESSION['error'] = "Something went wrong.";
                    header("Location: ../transactions.php");
                }
                break;
            }
//Delete payments
        case 'delete_payment': {
                $delete_payment = $conn->query("DELETE FROM tbl_payments WHERE token = '{$_GET['delete_payment']}'");
                if ($delete_payment > 0) {
                    header("Location: ../payments.php");
                } else {
                    $_SESSION['error'] = "Something went wrong.";
                    header("Location: ../payments.php");
                }
                break;
            }
        default: {
                $_SESSION['error'] = "Something went wrong.";
                header("Location: ../");
                break;
            }
    }
}
