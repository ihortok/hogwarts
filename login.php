<?php
session_start();
require_once 'config.php';

$user_name = $_POST['user_name'];
$user_password = $_POST['password'];

if ($user_name != "" && $user_password != "") {
    $result = $db->query("SELECT * FROM tbl_users WHERE user_name = '$user_name' and user_password = '$user_password'");

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "success";
    } else {
        echo "error";
    }
}
