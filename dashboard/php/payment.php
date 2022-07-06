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

if (!isset($_POST['user'])) {
    header("Location: ../payments.php");
} else {
    $user = $conn->real_escape_string($_POST['user']);

    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $package_name = $conn->real_escape_string($_POST['package_name']);
    $package_class = $conn->real_escape_string($_POST['package_class']);
    $map_place = $conn->real_escape_string($_POST['map_place']);
    $package_code = $conn->real_escape_string($_POST['package_code']);
    $package_type = $conn->real_escape_string($_POST['package_type']);

    

    if(!empty($package_class)){
        $package_source = "</br> Package Class : " . $package_class;

    }

    $user_query = $conn->query("SELECT * FROM tbl_billings WHERE user = '{$user}' LIMIT 1");

    if ($user_query->num_rows > 0) {
        $user_row = $user_query->fetch_assoc();

        $name = $user_row['fname'] . ' ' . $user_row['lname'];
        $email = $user_row['email'];
        $mobile = $user_row['contact'];
        $token = token_code(10);

        $redirect_url = 'https://g.payx.ph/payment_request';

        $redirect_success = "http://localhost/dashboard/success.php";
        $redirect_failed = "http://localhost/dashboard/failed.php";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $redirect_url,
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
                "description" => "Package Name : " . $package_name . $package_source."<br> Payment Type : ". $package_type."</br> Map Place : " . $map_place,
            ),

        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $resData = json_decode($response, true);

        if ($resData['data']['status'] == "pending") {

            $reference = $resData['data']['code'];
            $hash = $resData['data']['hash'];

            $date = date("Y-m-d");
            $redirect_url = $resData['data']['checkouturl'];
            $status = "Pending";
            $transaction_id = $resData['data']['request_id'];

            //User info
            $fname = $user_row['fname'];
            $lname = $user_row['lname'];
    
            

            $transaction_query = $conn->query("INSERT INTO tbl_transactions (user, token, package_type, package_code, hash, reference, fname, lname, method, amount, package_name, package_class, map_place, status, date) VALUES('{$user}', '{$token}', '{$package_type}', '{$package_code}', '{$hash}', '{$reference}', '{$fname}', '{$lname}', 'Gcash', '{$amount}', '{$package_name}', '{$package_class}', '{$map_place}', '{$status}', '{$date}')");

            if ($transaction_query) {
                header("Location: " . $redirect_url);
            } else {
                echo ("Something went wrong!");
            }
        }
    } else {
        echo ("user not found!");
    }
}
