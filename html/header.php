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
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
    <link rel="manifest" href="../favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.all.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
    <div class="wrapper wrapper_container">
        <?php
        if (isset($_SESSION['nickname'])) {
            ?>
            <div>logged in user</div>
            <?php
        }
        ?>
        <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="user.php">Wizard card</a></li>
            </ul>
        </nav>
        <div class="header_enter">
            <?php
            if (isset($_SESSION['nickname'])) {
                ?>
                <a href="../logout.php" id="log-out">log out</a>
                <?php
            } else {
                ?>
                <form class="login" method="POST" id="login-form">
                    <small class="error-msg"></small>
                    <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
                    <button type="submit" name="login-btn" id="login-btn">sign in</button>
                    <span>or</span>
                    <button class="register-btn">sign up</button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</header>