<?php
session_start();
include_once("conn.php");

$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$redirect = header("Location: ../login.php");
if (isset($_POST['user-account'])) {
    if (!empty($email) && !empty($password)) {
        $user_query = $conn->query("SELECT * FROM tbl_users WHERE email = '{$email}' LIMIT 1");
        if ($user_query->num_rows > 0) {
            $user_row = $user_query->fetch_assoc();
            if ($user_row['status'] == "Verified") {
                if (password_verify($password, $user_row['password'])) {
                    $_SESSION['client'] = $user_row['id'];
                    header("Location: ../dashboard/");
                } else {
                    $_SESSION['attemp'] += 1;
                    if ($_SESSION['attemp'] > 4) {
                        $_SESSION['time'] = time();
                        $_SESSION['error'] = "Your account has been lock.";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Incorrect email or password";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['verify_account'] = $email;
                header("Location:  ../verify.php");
            }
        } else {
            $_SESSION['error'] = "Invalid email or password";
            $redirect;
        }
    } else {
        $_SESSION['error'] = "Please fill up the form.";
        $redirect;
    }
} else {
    header("Location: ../index.php");
}
