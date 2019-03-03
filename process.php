<?php
require_once 'config.php';

if (isset($_POST['new_wizard'])) {
    $nickname = $_POST['nickname'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $race = $_POST['race'];
    $sex = $_POST['sex'];
    $patronum = $_POST['patronum'];
    $subject = $_POST['subject'];
    $house = $_POST['house'];
    $blood_status = $_POST['blood_status'];

    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";

    $db->query("INSERT INTO wizard (nickname, name, surname, age, race, sex, patronum, subject, house, blood_status) VALUES ('$nickname', '$name', '$surname', '$age', '$race', '$sex', '$patronum', '$subject', '$house', '$blood_status')") or die($db->error);

    header("location:index.php");
}
