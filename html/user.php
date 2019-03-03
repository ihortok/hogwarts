<?php include 'header.php'; ?>

<div class="wrapper">
    <div class="container_fluid">
        <div class="row">
            <?php
            if (isset($_SESSION['nickname'])) {
                $nick = $_SESSION['nickname'];
                $result = $db->query("SELECT * FROM wizard WHERE nickname= '$nick'") or die($db->error);
                $row = $result->fetch_assoc();
                ?>
                <div class="col-12">
                    <p>Hello, <?= $row['name']; ?>!</p>
                </div>
                <div class="col-12 col-sm-6">
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td data-field="name"><?= $row['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Surname:</td>
                            <td data-field="surname"><?= $row['surname']; ?></td>
                        </tr>
                        <tr>
                            <td>Age:</td>
                            <td data-field="age"><?= $row['age']; ?></td>
                        </tr>
                        <tr>
                            <td>Race:</td>
                            <td data-field="race"><?= $row['race']; ?></td>
                        </tr>
                        <tr>
                            <td>Sex:</td>
                            <td data-field="sex"><?= $row['sex']; ?></td>
                        </tr>
                        <tr>
                            <td>Patronum:</td>
                            <td data-field="patronum"><?= $row['patronum']; ?></td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td data-field="status"><?= $row['status']; ?></td>
                        </tr>
                        <?php
                        if ($row['status'] == 'teacher') {
                            ?>
                            <tr>
                                <td>Subject:</td>
                                <td data-field="subject"><?= $row['subject']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td>House:</td>
                            <td data-field="house"><?= $row['house']; ?></td>
                        </tr>
                        <tr>
                            <td>Blood status:</td>
                            <td data-field="blood_status"><?= $row['blood_status']; ?></td>
                        </tr>
                    </table>
                </div>
                <?php
            } else {
                ?>
                <div class="col-12">
                    <h2>Dear Wizard, sigh in, please.</h2>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
