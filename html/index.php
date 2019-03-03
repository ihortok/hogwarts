<?php include 'header.php'; ?>

<form class="login" method="POST" id="login-form">
    <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
    <span class="error-msg"></span>
    <button type="submit" name="login-btn" id="login-btn">sign In</button>
</form>

<?php
if (isset($_SESSION['headmaster'])) {
    ?>
    <button>add new</button>
    <?php
}
?>

<?php include 'footer.php'; ?>
