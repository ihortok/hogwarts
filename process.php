<?php
require_once 'config.php';

if ($_POST['nickname'] !== "") {
    $nickname = $_POST['nickname'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $race = $_POST['race'];
    $sex = $_POST['sex'];
    if (empty($_POST['patronum'])) {
        $patronum = null;
    } else {
        $patronum = $_POST['patronum'];
    }
    if (empty($_POST['subject'])) {
        $subject = null;
    } else {
        $subject = $_POST['subject'];
    }
    $house = $_POST['house'];
    $blood_status = $_POST['blood_status'];
    $status = $_POST['status'];

    $db->query("INSERT INTO wizard (nickname, name, surname, age, race, sex, patronum, status, subject, house, blood_status) VALUES ('$nickname', '$name', '$surname', '$age', '$race', '$sex', '$patronum', '$status', '$subject', '$house', '$blood_status')") or die($db->error);

    //header("location:index.php");
    echo "success";
}
