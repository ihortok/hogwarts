<?php require_once 'config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
$result = $mysqli->query("SELECT * FROM house") or die($mysqli->error);
var_dump($result);
?>

<?php
while ($row = $result->fetch_assoc()) {
    ?>
    <p><?= $row['name']; ?></p>
    <?php
}
?>

<h1>Hello, World!</h1>


<script src="js/main.js"></script>

</body>
</html>