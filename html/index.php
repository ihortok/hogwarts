<?php include 'header.php'; ?>

<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
    <h2>qwe</h2>
    <?php
}
?>

<form class="login" method="POST" id="login-form">
    <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
    <span class="error-msg"></span>
    <button type="submit" name="login-btn" id="login-btn">sign In</button>
</form>

<?php include 'footer.php'; ?>
