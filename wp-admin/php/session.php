<?php 
session_start();
include_once('../../wp-php/conn.php');
$admin = $_SESSION['admin'];
if(isset($admin)){
    $admin_query = $conn->query("SELECT * FROM tbl_admins WHERE id = '{$admin}' LIMIT 1");
    if($admin_query->num_rows > 0){
        $admin_row = $admin_query->fetch_assoc();
        $first_name = $admin_row['fname'];
        $last_name = $admin_row['lname'];
        $avatar = $admin_row['avatar'];
        $user = $admin_row['id'];
    }else{
        header("Location: ../");   
    }
}else{
    header("Location: ../");
}

?>