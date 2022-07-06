<?php
session_start();
include_once('../../wp-php/conn.php');

function anti_xss($str, $config)
{
    $result = $config->real_escape_string(htmlspecialchars($_POST[$str]));
    return $result;
}

function isset_file($file_name)
{
    return (isset($_FILES[$file_name]) && $_FILES[$file_name]['error'] != UPLOAD_ERR_NO_FILE);
}

if (isset($_POST['update-account'])) {
    $redirect = header("Location: ../dashboard.php");
    $user_id = anti_xss("user_id", $conn);
    $fname = anti_xss("fname", $conn);
    $lname = anti_xss("lname", $conn);
    $email = anti_xss("email", $conn);
    $pass = $conn->real_escape_string($_POST['password']);
    $cpass = $conn->real_escape_string($_POST['cpassword']);
    $hash_password = password_hash($pass, PASSWORD_DEFAULT);

    if (empty($pass) && empty($cpass)) {
        if (isset_file('avatar')) {
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("UPDATE tbl_users SET avatar = '{$new_name}', fname = '{$fname}', lname = '{$lname}', email = '{$email}' WHERE id = '{$user_id}'");

                    if ($user_query > 0) {
                        $_SESSION['success'] = "Updated Successfully";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                }
            } else {
                $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                $redirect;
            }
        } else {
            $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}' WHERE id = '{$user_id}'");
            if ($user_query > 0) {
                $_SESSION['success'] = "Updated Successfully";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        if (isset_file('avatar')) {
            if (!empty($pass) && !empty($cpass)) {
                $uppercase = preg_match('@[A-Z]@', $pass);
                $lowercase = preg_match('@[a-z]@', $pass);
                $number    = preg_match('@[0-9]@', $pass);
                $specialChars = preg_match('@[^\w]@', $pass);
                if (strlen($pass) < 8) {
                    $_SESSION['error'] = "Your Password Must Contain At Least 8 Characters!";
                    $redirect;
                } elseif ($specialChars) {
                    $_SESSION['error'] = "Your Password Must Contain At Least 1 Special Characters!";
                    $redirect;
                } elseif ($uppercase) {
                    $_SESSION['error'] = "Your Password Must Contain At Least 1 Capital Letter!";
                    $redirect;
                } elseif ($lowercase) {
                    $_SESSION['error'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
                    $redirect;
                } elseif ($number) {
                    $_SESSION['error'] = "Your Password Must Contain At Least 1 Number!";
                    $redirect;
                } else {
                    $img_name = $_FILES['avatar']['name'];
                    $tmp_name = $_FILES['avatar']['tmp_name'];
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $img_extension = ['png', 'jpg', 'jpeg'];
                    $new_name = rand(100, 999) . '.' . $img_ext;
                    if (in_array($img_ext, $img_extension) === true) {
                        if (move_uploaded_file($tmp_name, "../../wp-images/" . $new_name)) {
                            $user_query = $conn->query("UPDATE tbl_users SET avatar = '{$new_name}', fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash_password}' WHERE id = '{$user_id}'");

                            if ($user_query > 0) {
                                $_SESSION['success'] = "Updated Successfully";
                                $redirect;
                            } else {
                                $_SESSION['error'] = "Something went wrong";
                                $redirect;
                            }
                        }
                    } else {
                        $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                        $redirect;
                    }
                }
            } else {
                $img_name = $_FILES['avatar']['name'];
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $img_extension = ['png', 'jpg', 'jpeg'];
                $new_name = rand(100, 999) . '.' . $img_ext;
                if (in_array($img_ext, $img_extension) === true) {
                    if (move_uploaded_file($tmp_name, "../../../wp-images/" . $new_name)) {
                        $user_query = $conn->query("UPDATE tbl_users SET avatar = '{$new_name}', fname = '{$fname}', lname = '{$lname}', email = '{$email}' WHERE id = '{$user_id}'");

                        if ($user_query > 0) {
                            $_SESSION['success'] = "Updated Successfully";
                            $redirect;
                        } else {
                            $_SESSION['error'] = "Something went wrong";
                            $redirect;
                        }
                    }
                } else {
                    $_SESSION['error'] = "The file is not support only jpeg, jpg and png";
                    $redirect;
                }
            }
        } else {
            // for empty profile
            $uppercase = preg_match('@[A-Z]@', $pass);
            $lowercase = preg_match('@[a-z]@', $pass);
            $number    = preg_match('@[0-9]@', $pass);
            $specialChars = preg_match('@[^\w]@', $pass);
            if (strlen($pass) < 8) {
                $_SESSION['error'] = "Your Password Must Contain At Least 8 Characters!";
                $redirect;
            } elseif ($specialChars) {
                $_SESSION['error'] = "Your Password Must Contain At Least 1 Special Characters!";
                $redirect;
            } elseif ($uppercase) {
                $_SESSION['error'] = "Your Password Must Contain At Least 1 Capital Letter!";
                $redirect;
            } elseif ($lowercase) {
                $_SESSION['error'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
                $redirect;
            } elseif ($number) {
                $_SESSION['error'] = "Your Password Must Contain At Least 1 Number!";
                $redirect;
            } else {
                if ($pass == $cpass) {
                    $user_query = $conn->query("UPDATE tbl_users SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$hash_password}' WHERE id = '{$user_id}'");
                    if ($user_query > 0) {
                        $_SESSION['success'] = "Updated Password";
                        $redirect;
                    } else {
                        $_SESSION['error'] = "Something went wrong";
                        $redirect;
                    }
                } else {
                    $_SESSION['error'] = "Password not matched";
                    $redirect;
                }
            }
        }
    }
} else {
    header("Location: ../dashboard.php");
}
