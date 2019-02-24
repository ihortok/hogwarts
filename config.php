<?php
$host = 'localhost';
$database = 'hogwarts';
$user = 'root';
$password = 'root';

$mysqli = new mysqli($host, $user, $password, $database) or die(mysqli_error($mysqli));
