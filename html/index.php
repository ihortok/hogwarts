<?php include 'header.php'; ?>

<form class="login" method="POST" id="login-form">
    <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
    <span class="error-msg"></span>
    <button type="submit" name="login-btn" id="login-btn">sign In</button>
</form>

<div class="headmaster">
    <table>
        <tbody>
        <?php
        $result = $db->query("SELECT * FROM wizard WHERE status = 'headmaster'");
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['surname']; ?></td>
                <td><?= $row['age']; ?></td>
                <td><?= $row['race']; ?></td>
                <td><?= $row['sex']; ?></td>
                <td><?= $row['patronum']; ?></td>
                <td><?= $row['subject']; ?></td>
                <td><?= $row['house']; ?></td>
                <td><?= $row['blood_status']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<div class="students">
    <table>
        <tbody>
        <?php
        $result = $db->query("SELECT * FROM wizard WHERE status = 'student'");
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['surname']; ?></td>
                <td><?= $row['age']; ?></td>
                <td><?= $row['race']; ?></td>
                <td><?= $row['sex']; ?></td>
                <td><?= $row['patronum']; ?></td>
                <td><?= $row['subject']; ?></td>
                <td><?= $row['house']; ?></td>
                <td><?= $row['blood_status']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
    if (isset($_SESSION['headmaster'])) {
        ?>
        <button>add new</button>
        <?php
    }
    ?>
</div>

<?php include 'footer.php'; ?>
