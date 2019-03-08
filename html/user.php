<?php include 'header.php'; ?>

<div class="user_page">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php
                if (isset($_SESSION['nickname'])) {
                    $nick = $_SESSION['nickname'];
                    $result = $db->query("SELECT * FROM wizard WHERE nickname= '$nick'") or die($db->error);
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="col-12">
                        <h2>Hello, <span class="name"><?= $row['name']; ?></span>!</h2>
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
                        <button data-nickname="<?= $row['nickname']; ?>" id="edit">edit</button>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-12">
                        <h3>Dear Wizard,<br> enter your nickname in the form above<br> or <a href="#"
                                                                                             class="register-btn">sigh
                                up</a>, please.</h3>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
