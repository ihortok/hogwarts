<?php
if (isset($_SESSION['headmaster'])) {
    ?>
    <form action="" method="POST">
        <label>
            <span>Nickname:</span>
            <input type="text" placeholder="theBoyWhoLived">
        </label>
        <label>
            <span>Name:</span>
            <input type="text" placeholder="Harry">
        </label>
        <label>
            <span>Surname:</span>
            <input type="text" placeholder="Potter">
        </label>
        <label>
            <span>Age:</span>
            <input type="text" placeholder="17">
        </label>
        <label>
            <span>Race:</span>
            <input type="text" placeholder="Human">
        </label>
        <label>
            <span>Sex:</span>
            <input type="text" placeholder="M">
        </label>
        <label>
            <span>Patronum:</span>
            <input type="text" placeholder="Stag">
        </label>
        <label>
            <span>Subject:</span>
            <input type="text" placeholder="">
        </label>
        <label>
            <span>House:</span>
            <input type="text" placeholder="Gryffindor">
        </label>
        <label>
            <span>Blood-status:</span>
            <input type="text" placeholder="Half-blood">
        </label>
    </form>
    <?php
}
?>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
