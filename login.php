<?php
require_once 'config.php';
session_start();

$nickname = $_POST['nickname'];
if ($nickname != "") {
    $result = $db->query("SELECT * FROM wizard WHERE nickname = '$nickname'");

    $row = $result->fetch_assoc();

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['nickname'] = $row['nickname'];;
        $_SESSION['headmaster'] = $row['headmaster'];
        echo "success";
    } else {
        echo "error";
    }
}
