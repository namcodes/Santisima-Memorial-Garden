<?php 
session_start();
include_once('conn.php');
$client = $_SESSION['client'];
if(isset($client)){
    $client_query = $conn->query("SELECT * FROM tbl_users WHERE id = '{$client}' LIMIT 1");
    if($client_query->num_rows > 0){
        $client_row = $client_query->fetch_assoc();
        $first_name = $client_row['fname'];
        $last_name = $client_row['lname'];
        $email = $client_row['email'];
        $avatar = $client_row['avatar'];
        $user = $client_row['id'];
    }else{
        header("Location: ../");   
    }
}else{
    header("Location: ../");
}

?>