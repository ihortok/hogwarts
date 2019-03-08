<?php
require_once 'config.php';

if (isset($_POST['current_nick'])) {
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

    if ($_POST['current_nick'] !== "") {
        $current_nick = $_POST['current_nick'];
        $db->query("UPDATE wizard SET name='$name', surname='$surname', age='$age', race='$race', sex='$sex', patronum='$patronum', subject='$subject', house='$house', blood_status='$blood_status' WHERE  nickname='$current_nick'") or die($db->error);
        echo "success";
    } else {
        $nickname = $_POST['nickname'];
        $db->query("INSERT INTO wizard (nickname, name, surname, age, race, sex, patronum, status, subject, house, blood_status) VALUES ('$nickname', '$name', '$surname', '$age', '$race', '$sex', '$patronum', '$status', '$subject', '$house', '$blood_status')") or die($db->error);
        echo "success";
    }
}

if (isset($_POST['delete'])) {
    $nickname = $_POST['delete'];
    $db->query("DELETE FROM wizard WHERE nickname='$nickname'") or die($db->error);
    echo 'success';
}
