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

function generate_code(
    int $length,
    string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
  ): string {
    if ($length < 1) {
      throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
      $pieces[] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
  }

if (isset($_POST['new-account'])) {
    $redirect = header("Location: ../users.php");

    $fname = anti_xss("fname", $conn);
    $lname = anti_xss("lname", $conn);
    $email = anti_xss("email", $conn);
    $pass = $conn->real_escape_string($_POST['password']);
    $cpass = $conn->real_escape_string($_POST['cpassword']);
    $hash_password = password_hash($pass, PASSWORD_DEFAULT);

    if ($pass == $cpass) {
        if (isset_file('avatar')) {
            $img_name = $_FILES['avatar']['name'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);
            $img_extension = ['png', 'jpg', 'jpeg'];
            $new_name = rand(100, 999) . '.' . $img_ext;
            if (in_array($img_ext, $img_extension) === true) {
                $random_code = generate_code(16);
                if (move_uploaded_file($tmp_name, "../../../wp-images/" . $new_name)) {
                    $user_query = $conn->query("INSERT INTO tbl_users (avatar, fname, lname, email, password, code, status) VALUES ('{$new_name}', '{$fname}', '{$lname}', '{$email}', '{$hash_password}', '{$random_code}', 'Verified')");

                    if ($user_query > 0) {
                        $_SESSION['success'] = "Successfully Added";
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
            // for empty profile
            $user_query = $conn->query("INSERT INTO tbl_users (avatar, fname, lname, email, password, status) VALUES ('default_avatar.jpeg', '{$fname}', '{$lname}', '{$email}', '{$hash_password}', 'Verified')");
            if ($user_query > 0) {
                $_SESSION['success'] = "Successfully Added";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        $_SESSION['error'] = "Password not matched";
        $redirect;
    }
}

if (isset($_POST['new-record'])) {
    $redirect = header("Location: ../records.php");
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

    $record_query = $conn->query("INSERT INTO tbl_records (name, age, date_birth, date_death, description) VALUES('{$name}', '{$age}', '{$format_birthday}', '{$format_deathday}', '{$description}')");

    if ($record_query) {
        $_SESSION['success'] = "Added Successfully";
        $redirect;
    } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
    }
}
