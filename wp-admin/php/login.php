<?php
session_start();
include_once("../../wp-php/conn.php");

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$redirect = header("Location: ../");
if (isset($_POST['user-account'])) {
    if (!empty($username) && !empty($password)) {
        $user_query = $conn->query("SELECT * FROM tbl_admins WHERE username = '{$username}' LIMIT 1");
        if ($user_query->num_rows > 0) {
            $user_row = $user_query->fetch_assoc();
            if (password_verify($password, $user_row['password'])) {
                $_SESSION['admin'] = $user_row['id'];
                header("Location: ../dashboard/");
            } else {
                $_SESSION['error'] = "Incorrect username or password";
                $redirect;
            }
        } else {
            $_SESSION['error'] = "Invalid username or password";
            $redirect;
        }
    } else {
        $_SESSION['error'] = "Please fill up the form.";
        $redirect;
    }
} else {
    header("Location: /");
}
