<?php include 'header.php'; ?>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
    <h2>qwe</h2>
    <?php
}
?>

<form class="login" method="post" id="login-form">
    <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
    <button type="submit" name="login-btn" id="login-btn">sign In</button>
</form>

<?php include 'footer.php'; ?>
