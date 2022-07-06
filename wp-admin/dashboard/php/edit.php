<?php
session_start();
include_once('../../../wp-php/conn.php');

function anti_xss($str, $config)
{
    $result = $config->real_escape_string(htmlspecialchars($_POST[$str]));
    return $result;
}

function isset_file($file_name)
{
    return (isset($_FILES[$file_name]) && $_FILES[$file_name]['error'] != UPLOAD_ERR_NO_FILE);
}

if (isset($_POST['user_account'])) {
    $user_id = $_POST['user_account'];
    $user_query = $conn->query("SELECT * FROM tbl_users WHERE id = '$user_id' LIMIT 1");
    if ($user_query->num_rows > 0) {
        $data = $user_query->fetch_array();
    } else {
        $data = "error";
    }
    echo (json_encode($data));
}

if (isset($_POST['update-account'])) {
    $redirect = header("Location: ../users.php");
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
                $img_name = $_FILES['avatar']['name'];
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $img_extension = ['png', 'jpg', 'jpeg'];
                $new_name = rand(100, 999) . '.' . $img_ext;
                if (in_array($img_ext, $img_extension) === true) {
                    if (move_uploaded_file($tmp_name, "../../../wp-images/" . $new_name)) {
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

if (isset($_POST['dead_record'])) {
    $record_id = $_POST['dead_record'];
    $record_query = $conn->query("SELECT * FROM tbl_records WHERE id = '$record_id' LIMIT 1");
    if ($record_query->num_rows > 0) {
        $data = $record_query->fetch_array();
    } else {
        $data = "error";
    }
    echo (json_encode($data));
}

if (isset($_POST['update-record'])) {
    $redirect = header("Location: ../records.php");

    $record_id = $_POST['record_id'];
    $name = anti_xss("name", $conn);
    $description = anti_xss("description", $conn);
    //Date of Birth
    $birthday = strtotime($_POST["birthday"]);
    $format_birthday = date('Y-m-d', $birthday);
    //Date of Death
    $deathday = strtotime($_POST["deathday"]);
    $format_deathday = date('Y-m-d', $deathday);

    //Compute age of dead
    $death_date = date("d-m-Y", $deathday);
    $birth_date = date("d-m-Y", $birthday);

    $calculate_age = date_diff(date_create($birth_date), date_create($death_date));
    $age = $calculate_age->format("%y");

    if (!empty($birthday) && !empty($deathday)) {
        $update_record = $conn->query("UPDATE tbl_records SET name = '{$name}', age = '{$age}', date_birth = '{$format_birthday}', date_death = '{$format_deathday}', description = '{$description}' WHERE id = '{$record_id}'");
        if ($update_record) {
            $_SESSION['success'] = "Updated Successfully";
            $redirect;
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    } else {
        $update_record = $conn->query("UPDATE tbl_records SET name = '{$name}', description = '{$description}' WHERE id = '{$record_id}'");
        if ($update_record) {
            $_SESSION['success'] = "Updated Successfully";
            $redirect;
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }
}

if (isset($_POST['edit-transaction'])) {
    $redirect = header("Location: ../transactions.php");

    $token = anti_xss("token", $conn);
    $status = anti_xss("status", $conn);

    if (!empty($status)) {
        $transaction_query = $conn->query("UPDATE tbl_transactions SET status = '{$status}' WHERE token = '{$token}'");
        if ($transaction_query > 0) {
            $_SESSION['success'] = "Successfully Updated";
            $redirect;
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    } else {
        $_SESSION['error'] = "Select one for status.";
        $redirect;
    }
}

if (isset($_POST['edit-payment'])) {
    $redirect = header("Location: ../payments.php");

    $token = anti_xss("token", $conn);
    $amount = anti_xss("amount", $conn);
    $new_balance = anti_xss("balance", $conn);

    if (!empty($amount)) {
        $token_query = $conn->query("SELECT * FROM tbl_payments WHERE token = '{$token}' LIMIT 1");
        if ($token_query->num_rows > 0) {
            $token_row = $token_query->fetch_assoc();
            $total = $token_row['paid'] + $amount;
            $balance = $token_row['balance'] - $amount;
            $update_query = $conn->query("UPDATE tbl_payments SET balance = '{$balance}', paid = '{$total}' WHERE token = '{$token}'");
            if($update_query){
                $_SESSION['success'] = "Successfully updated";
                $redirect;
            }else{
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    } else {
        $token_query = $conn->query("SELECT * FROM tbl_payments WHERE token = '{$token}' LIMIT 1");
        if ($token_query->num_rows > 0) {
            $token_row = $token_query->fetch_assoc();
            $balance = $token_row['balance'] + $new_balance;
            $update_query = $conn->query("UPDATE tbl_payments SET balance = '{$balance}' WHERE token = '{$token}'");
            if($update_query){
                $_SESSION['success'] = "Successfully updated";
                $redirect;
            }else{
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        } else {
            $_SESSION['error'] = "Something went wrong";
            $redirect;
        }
    }
}
