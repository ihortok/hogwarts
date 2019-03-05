<?php include 'header.php'; ?>
<main class="main">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6">
                    <div class="info-section headmaster">
                        <table>
                            <thead>
                            <tr>
                                <th colspan="2">Head of school</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = $db->query("SELECT * FROM wizard WHERE status = 'headmaster'");
                            $row = $result->fetch_assoc();
                            ?>
                            <tr>
                                <th>Name:</th>
                                <td><?= $row['name'] . ' ' . $row['surname']; ?></td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td><?= $row['age']; ?></td>
                            </tr>
                            <tr>
                                <th>Race:</th>
                                <td><?= $row['race']; ?></td>
                            </tr>
                            <tr>
                                <th>Sex:</th>
                                <td><?= $row['sex']; ?></td>
                            </tr>
                            <tr>
                                <th>Race:</th>
                                <td><?= $row['race']; ?></td>
                            </tr>
                            <tr>
                                <th>Patronum:</th>
                                <td><?= $row['patronum']; ?></td>
                            </tr>
                            <tr>
                                <th>House:</th>
                                <td><?= $row['house']; ?></td>
                            </tr>
                            <tr>
                                <th>Blood-status:</th>
                                <td><?= $row['blood_status']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="info-section student">
                        <h3>Students</h3>
                        <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Race</th>
                                <th>Sex</th>
                                <th>Patronum</th>
                                <th>House</th>
                                <th>Blood-status</th>
                            </tr>
                            </thead>
                            <?php
                            $students = $db->query("SELECT * FROM wizard WHERE status = 'student'");
                            if (mysqli_num_rows($students) > 0) {
                                ?>
                                <tbody>
                                <?php
                                while ($row = $students->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $row['name'] . ' ' . $row['surname']; ?></td>
                                        <td><?= $row['age']; ?></td>
                                        <td><?= $row['race']; ?></td>
                                        <td><?= $row['sex']; ?></td>
                                        <td><?= $row['patronum']; ?></td>
                                        <td><?= $row['house']; ?></td>
                                        <td><?= $row['blood_status']; ?></td>
                                        <?php
                                        if (isset($_SESSION['headmaster']) && $_SESSION['headmaster'] == 1) {
                                            ?>
                                            <td class="remove">
                                                <!--                                                <a href="../process.php?delete=-->
                                                <?//= $row['nickname']; ?><!--"><i class="fas fa-times"></i></a>-->
                                                <a href="delete=<?= $row['nickname']; ?>"><i
                                                            class="fas fa-times"></i></a>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <?php
                            } else {
                                ?>
                                <tfoot class="table_empty">
                                <tr>
                                    <td colspan="7">list is empty :(</td>
                                </tr>
                                </tfoot>
                                <?php
                            }
                            ?>
                        </table>
                        <?php
                        if (isset($_SESSION['headmaster']) && $_SESSION['headmaster'] == 1) {
                            ?>
                            <button class="new_wizard" id="add_new_student">add new</button>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="info-section teacher">
                        <h3>Teachers</h3>

                        <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Race</th>
                                <th>Sex</th>
                                <th>Patronum</th>
                                <th>Subject</th>
                                <th>House</th>
                                <th>Blood-status</th>
                            </tr>
                            </thead>
                            <?php
                            $teachers = $db->query("SELECT * FROM wizard WHERE status = 'teacher'");
                            if (mysqli_num_rows($teachers) > 0) {
                                ?>
                                <tbody>
                                <?php
                                while ($row = $teachers->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $row['name'] . ' ' . $row['surname']; ?></td>
                                        <td><?= $row['age']; ?></td>
                                        <td><?= $row['race']; ?></td>
                                        <td><?= $row['sex']; ?></td>
                                        <td><?= $row['patronum']; ?></td>
                                        <td><?= $row['subject']; ?></td>
                                        <td><?= $row['house']; ?></td>
                                        <td><?= $row['blood_status']; ?></td>
                                        <?php
                                        if (isset($_SESSION['headmaster']) && $_SESSION['headmaster'] == 1) {
                                            ?>
                                            <td class="remove"><a href="../process.php?delete=<?= $row['nickname']; ?>"><i
                                                            class="fas fa-times"></i></a></td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <?php
                            } else {
                                ?>
                                <tfoot class="table_empty">
                                <tr>
                                    <td colspan="8">list is empty :(</td>
                                </tr>
                                </tfoot>
                                <?php
                            }
                            ?>
                        </table>
                        <?php
                        if (isset($_SESSION['headmaster']) && $_SESSION['headmaster'] == 1) {
                            ?>
                            <button class="new_wizard" id="add_new_teacher">add new</button>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
