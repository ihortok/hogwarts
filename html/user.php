<?php include 'header.php'; ?>

<h1>hello</h1>

<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $result = $db->query("SELECT * FROM wizard") or die($mysqli->error);
    ?>
    <table>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td>Name:</td>
                <td><?= $row['name']; ?></td>
            </tr>
            <tr>
                <td>Surname:</td>
                <td><?= $row['surname']; ?></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><?= $row['age']; ?></td>
            </tr>
            <tr>
                <td>Race:</td>
                <td><?= $row['race']; ?></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td><?= $row['sex']; ?></td>
            </tr>
            <tr>
                <td>Patronum:</td>
                <td><?= $row['patronum']; ?></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><?= $row['status']; ?></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><?= $row['subject']; ?></td>
            </tr>
            <tr>
                <td>House:</td>
                <td><?= $row['house']; ?></td>
            </tr>
            <tr>
                <td>Blood status:</td>
                <td><?= $row['blood_status']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    ?>

    <form class="login" method="post" id="login-form">
        <input type="text" placeholder="nickname" name="nickname" id="nickname" required>
        <button type="submit" name="login-btn" id="login-btn">sign In</button>
    </form>

    <?php
}
?>

<?php include 'footer.php'; ?>
