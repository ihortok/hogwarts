<?php
if (isset($_SESSION['headmaster'])) {
    ?>
<!--    <form id="new_wizard" action="../process.php" method="POST">-->
    <form id="new_wizard" method="POST">
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
            <input type="number" name="age" value="11" required>
        </label>
        <label>
            <span>Race:</span>
            <select name="race">
                <?php
                $result = $db->query("SELECT * FROM race");
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option><?= $row['name']; ?></option>
                    <?php
                }
                ?>
            </select>
        </label>
        <label>
            <span>Sex:</span>
            <label><input type="radio" name="sex" value="M" checked> M</label>
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
            <select name="house">
                <?php
                $result = $db->query("SELECT * FROM house");
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option><?= $row['name']; ?></option>
                    <?php
                }
                ?>
            </select>
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
        <button type="submit" name="add_wizard">save</button>
    </form>
    <?php
}
?>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
