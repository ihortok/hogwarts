var edit = false;

$('document').ready(function () {
    /*------------ log in ------------*/
    $("#login-form input").click(function () {
        if ($('.error-msg').text() === "") {
            return false;
        }
        $('.error-msg').text("");
    });

    $("#login-form").submit(function () {
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../login.php',
            data: data,
            async: true,
            success: function (response) {
                if (response === "success") {
                    document.location = 'user.php';
                }
                else {
                    $(".error-msg").text("seems like you are a muggle");
                    $("#login-form input").val("");
                }
            }
        });
        return false;
    });

    /*------------ new wizard buttons ------------*/
    $('.register-btn').click(function (e) {
        e.preventDefault();
        $('.status-form').show();
    });

    $('#choose_status').click(function (e) {
        e.preventDefault();
        $("#new_wizard input[name=status]").val($('input[name=status]:checked', '.status-form').val());
        $('.status-form').hide();
        $('.register-form').show();
    });

    $('#add_new_student').click(function () {
        $("#new_wizard input[name=status]").val("student");
        $('.register-form').show();
    });

    $('#add_new_teacher').click(function () {
        $("#new_wizard input[name=status]").val("teacher");
        $('.register-form').show();
    });

    /*------------ popup ------------*/
    $('.popup_close').click(function () {
        $(this).parents('.popup').removeAttr('style');
    });

    /*------------ add/remove/update wizard ------------*/
    $("#add_wizard").click(function () {
        var fields = {
            nickname: $(this).parents('form').find("input[name='nickname']").val(),
            name: $(this).parents('form').find("input[name='name']").val(),
            surname: $(this).parents('form').find("input[name='surname']").val(),
            age: $(this).parents('form').find("input[name='age']").val(),
            race: $(this).parents('form').find("select[name='race'] option:selected").val(),
            sex: $(this).parents('form').find("input[name='sex']:checked").val(),
            patronum: $(this).parents('form').find("input[name='patronum']").val(),
            house: $(this).parents('form').find("select[name='house'] option:selected").val(),
            blood_status: $(this).parents('form').find("select[name='blood_status'] option:selected").val(),
            status: $(this).parents('form').find("input[name='status']").val(),
            subject: ""
        };
        if (fields.status === 'teacher') {
            fields.subject = '<td>' + $(this).parents('form').find("input[name='subject']").val() + '</td>';
        }
        /*------------ table ------------*/
        if (edit === false) {
            var table = $('.' + fields.status + ' table');
        }
        var data = $(this).parents('form').serialize();
        $.ajax({
            type: 'POST',
            url: '../process.php',
            data: data,
            async: true,
            success: function (response) {
                if (response === "success") {
                    $(".register-form").removeAttr('style');
                    if (edit === true) {
                        $.each(fields, function (key, value) {
                            $(".user_page td[data-field='" + key + "']").text(value);
                        });
                        return false;
                    }
                    if (table.find('tbody tr').length == 0) {
                        table.find('tfoot').remove();
                        table.append('<tbody></tbody>');
                    }
                    table.find('tbody').append('<tr>' +
                        '<td>' + fields.name + ' ' + fields.surname + '</td>' +
                        '<td>' + fields.age + '</td>' +
                        '<td>' + fields.race + '</td>' +
                        '<td>' + fields.sex + '</td>' +
                        '<td>' + fields.patronum + '</td>' +
                        fields.subject +
                        '<td>' + fields.house + '</td>' +
                        '<td>' + fields.blood_status + '</td>' +
                        '</tr>');
                    if ($('.new_wizard').length > 0) {
                        table.find('tbody tr').last().append("<td class='remove'>" + "<a class='remove_bnt' href='delete=" + fields.nickname + "'><i class='fas fa-times'></i></a>" + "</td>");
                    }
                }
                else {
                    alert('error');
                }
            }
        });
        return false;
    });

    $(".info-section table").on('click', '.remove_bnt', function (e) {
        e.preventDefault();
        var nick = $(this).attr('href');
        var table = $(this).parents('table');
        var tr = $(this).parents('tr');
        var columns = table.find('thead th').length;
        $.ajax({
            type: 'POST',
            url: '../process.php',
            data: nick,
            async: true,
            success: function (response) {
                if (response === "success") {
                    if (table.find('tbody tr').length == 1) {
                        table.find('tbody').remove();
                        table.append('<tfoot class="table_empty"><tr><td colspan="' + columns + '">list is empty :(</td></tr></tfoot>');
                    } else {
                        tr.remove();
                    }
                }
                else {
                    alert('error');
                }
            }
        });
        return false;
    });

    $("#edit").click(function () {
        var table = $('.user_page table');
        var nickname = $(this).attr('data-nickname');
        var gender = table.find("td[data-field='sex']").text();
        $('.register-form label.label').each(function () {
            if ($(this).children('input').length > 0) {
                $(this).children('input').val(table.find("td[data-field='" + $(this).children('input').attr('name') + "']").text());
            } else if ($(this).children('select').length > 0) {
                $(this).children('select').find("option[value='" + table.find("td[data-field='" + $(this).children('select').attr('name') + "']").text() + "']").attr('selected', true);
            } else {
                console.log(table.find("td[data-field='" + $(this).children('label:eq(0)').find('input').attr('name') + "']").text());
                $(this).find("input[value='" + table.find("td[data-field='" + $(this).children('label:eq(0)').find('input').attr('name') + "']").text() + "']").prop('checked');
            }
        });
        $(".register-form input[name='nickname']").val(nickname).attr('disabled', 'disabled');
        $(".register-form input[name='current_nick']").val(nickname);
        $(".register-form input[value='" + gender + "']").prop("checked", true);
        $("#add_wizard").text('update');
        $('.register-form').show();
        edit = true;
    });

});
