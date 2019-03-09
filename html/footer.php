<div class="popup status-form">
    <div class="wrapper wrapper_container">
        <div class="form">
            <button class="popup_close"><i class="fas fa-times"></i></button>
            <h4>Choose your status:</h4>
            <form>
                <label>
                    <input type="radio" name="status" value="student" checked> student
                </label>
                <label>
                    <input type="radio" name="status" value="teacher"> teacher
                </label>
                <div class="form_buttons">
                    <button id="choose_status">next</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="popup register-form">
    <div class="wrapper wrapper_container">
        <div class="form">
            <button class="popup_close"><i class="fas fa-times"></i></button>
            <form id="new_wizard" method="POST">
                <label class="label">
                    <span>Nickname:</span>
                    <input type="text" name="nickname" placeholder="theBoyWhoLived" required>
                </label>
                <label class="label">
                    <span>Name:</span>
                    <input type="text" name="name" placeholder="Harry" required>
                </label>
                <label class="label">
                    <span>Surname:</span>
                    <input type="text" name="surname" placeholder="Potter" required>
                </label>
                <label class="label">
                    <span>Age:</span>
                    <input type="number" name="age" value="11" min="11" max="999" id="wizard_age"
                           oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                </label>
                <label class="label">
                    <span>Patronum:</span>
                    <input type="text" name="patronum" placeholder="Stag">
                </label>
                <label class="label subject">
                    <span>Subject:</span>
                    <input type="text" name="subject" placeholder="">
                </label>
                <label class="label">
                    <span>Race:</span>
                    <select name="race">
                        <?php
                        $result = $db->query("SELECT * FROM race");
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </label>
                <label class="label">
                    <span>House:</span>
                    <select name="house">
                        <?php
                        $result = $db->query("SELECT * FROM house");
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?= $row['name']; ?>"><?= $row['name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </label>
                <label class="label">
                    <span>Blood-status:</span>
                    <select name="blood_status">
                        <option value="half-blood">half-blood</option>
                        <option value="pure-blood">pure-blood</option>
                        <option value="muggle-born">muggle-born</option>
                    </select>
                </label>
                <label class="label">
                    <span>Sex:</span>
                    <label><input type="radio" name="sex" value="M" checked> M</label>
                    <label><input type="radio" name="sex" value="F"> F</label>
                </label>
                <input type="hidden" name="status">
                <input type="hidden" name="current_nick">
                <div class="form_buttons">
                    <button type="submit" name="add_wizard" id="add_wizard">save</button>
                    <button id="reset_wizard">reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
