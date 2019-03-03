<?php
if (isset($_SESSION['headmaster'])) {
    ?>
    <form action="../process.php" method="POST">
        <label>
            <span>Nickname:</span>
            <input type="text" name="nickname" placeholder="theBoyWhoLived" required>
        </label>
        <label>
            <span>Name:</span>
            <input type="text" name="name" placeholder="Harry" required>
        </label>
        <label>
            <span>Surname:</span>
            <input type="text" name="surname" placeholder="Potter" required>
        </label>
        <label>
            <span>Age:</span>
            <input type="number" name="age" placeholder="17">
        </label>
        <label>
            <span>Race:</span>
            <input type="text" name="race" placeholder="Human">
        </label>
        <label>
            <span>Sex:</span>
            <label><input type="radio" name="sex" value="M"> M</label>
            <label><input type="radio" name="sex" value="F"> F</label>
        </label>
        <label>
            <span>Patronum:</span>
            <input type="text" name="patronum" placeholder="Stag">
        </label>
        <label>
            <span>Subject:</span>
            <input type="text" name="subject" placeholder="">
        </label>
        <label>
            <span>House:</span>
            <input type="text" name="house" placeholder="Gryffindor">
        </label>
        <label>
            <span>Blood-status:</span>
            <select name="blood_status">
                <option>Half-blood</option>
                <option>Pure-blood</option>
                <option>Muggle-born</option>
            </select>
        </label>
        <button>reset</button>
        <button type="submit" name="new_wizard">save</button>
    </form>
    <?php
}
?>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
