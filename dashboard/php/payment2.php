<?php
session_start();
include("../../wp-php/conn.php");

function token_code(
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

$redirect = header("Location: ../dashboard.php");

if (isset($_GET['hash'])) {
    $hash = $conn->real_escape_string($_GET['hash']);
    $date = date("Y-m-d");
    $tbl_transactions = $conn->query("SELECT * FROM tbl_logs WHERE hash = '{$hash}' LIMIT 1");
    $tbl_rows = $tbl_transactions->fetch_assoc();
    $reference = $tbl_rows['reference'];
    $amount = $tbl_rows['amount'];
    $description = $tbl_rows['package_name'] . " | " . $tbl_rows['package_class'] . " | " . $tbl_rows['package_type'] . " | " . $tbl_rows['map_place'];
    $token = $tbl_rows['token'];
    $insert_logs = $conn->query("INSERT INTO payment_logs (token, date, amount, reference, description) VALUES ('{$token}', '{$date}', '{$amount}', '{$reference}', '{$description}')");
    if ($insert_logs) {
        $token_query = $conn->query("SELECT * FROM tbl_payments WHERE token = '{$token}' LIMIT 1");
        if ($token_query->num_rows > 0) {
            $token_row = $token_query->fetch_assoc();
            $total = $token_row['paid'] + $amount;
            $balance = $token_row['balance'] - $amount;
            $update_query = $conn->query("UPDATE tbl_payments SET balance = '{$balance}', paid = '{$total}' WHERE token = '{$token}'");
            if ($update_query) {
                $_SESSION['success'] = "Successfully Paid";
                $redirect;
            } else {
                $_SESSION['error'] = "Something went wrong";
                $redirect;
            }
        }
    } else {
        $_SESSION['error'] = "Something went wrong";
        $redirect;
    }
}

if (isset($_POST['pay-balance'])) {
    $user = $conn->real_escape_string($_POST['user']);
    $token = $conn->real_escape_string($_POST['token']);
    $amount = $conn->real_escape_string($_POST['amount']);

    if (!empty($amount)) {
        $tbl_transactions = $conn->query("SELECT * FROM tbl_transactions WHERE token = '{$token}' LIMIT 1");
        if ($tbl_transactions->num_rows > 0) {

            $tbl_rows = $tbl_transactions->fetch_assoc();
            $package_name = $tbl_rows['package_name'];
            $package_type = $tbl_rows['package_type'];
            $package_class = $tbl_rows['package_class'];;
            $map_place = $tbl_rows['map_place'];

            if (!empty($package_class)) {
                $package_class2 = "</br> Package Class : " . $package_class;
            } else {
                $package_class2 = "";
            }

            if (!empty($package_type)) {
                $package_type2 = "</br> Package Type : " . $package_type;
            } else {
                $package_type2 = "";
            }

            ///////////////////////////////////////////////////////////////////////////////////////////

            $user_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");
            $user_row = $user_query->fetch_assoc();
            $name = $user_row['fname'] . " " . $user_row['lname'];
            $email = $user_row['email'];
            $mobile = $user_row['contact'];

            ///////////////////////////////////////////////////////////////////////////////////////////

            $redirect_payment = 'https://g.payx.ph/payment_request';
            $redirect_failed = "http://localhost/dashboard/php/payment2.php";
            $redirect_success = "http://localhost/dashboard/php/payment2.php";

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $redirect_payment,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    "x-public-key" => 'pk_a81a3b974c01b0eab40d2d1777d7ef47',
                    "customername" => $name,
                    "customeremail" => $email,
                    "customermobile" => $mobile,
                    "expiry" => "24",
                    "merchantname" => 'Santisima Memorial Garden',
                    "redirectsuccessurl" =>  $redirect_success,
                    "redirectfailurl" => $redirect_failed,
                    "amount" => $amount,
                    "description" => "Package Name : " . $package_name . $package_class2 . "<br> Payment Type : " . $package_type2 . "</br> Map Place : " . $map_place,
                ),

            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $resData = json_decode($response, true);

            if ($resData['data']['status'] == "pending") {
                $redirect_url = $resData['data']['checkouturl'];
                $hash = $resData['data']['hash'];
                $reference = $resData['data']['code'];

                $tbl_logs = $conn->query("INSERT INTO tbl_logs (hash, reference, token, package_name, package_class, package_type, map_place, amount) VALUES ('{$hash}', '{$reference}', '{$token}', '{$package_name}', '{$package_class}', '{$package_type}', '{$map_place}', '$amount')");
                if ($tbl_logs) {
                    header("Location: " . $redirect_url);
                } else {
                    echo ("something went wrong");
                }
            }
        } else {
            $_SESSION['error'] = "There's no rows found!";
            $redirect;
        }
    }
}
