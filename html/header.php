<?php
require_once '../config.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hogwarts</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="user.php">Wizard card</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $result = $db->query("SELECT * FROM wizard") or die($mysqli->error);
        ?>
        <a href="../logout.php" id="log-out">log out</a>
        <?php
    }
    ?>
</header>