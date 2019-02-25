<?php
require_once 'config.php';
session_start();

$nickname = $_POST['nickname'];
if ($nickname != "") {
    $result = $db->query("SELECT * FROM wizard WHERE nickname = '$nickname'");

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['loggedin'] = true;
        echo "success";
    } else {
        echo "error";
    }
}
