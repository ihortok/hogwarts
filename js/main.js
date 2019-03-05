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
    $("#new_wizard").submit(function () {
        var nickname = $(this).find("input[name='nickname']").val();
        var name = $(this).find("input[name='name']").val();
        var surname = $(this).find("input[name='surname']").val();
        var age = $(this).find("input[name='age']").val();
        var race = $(this).find("select[name='race'] option:selected").val();
        var sex = $(this).find("input[name='sex']").val();
        var patronum = $(this).find("input[name='patronum']").val();
        var house = $(this).find("select[name='house'] option:selected").val();
        var blood_status = $(this).find("select[name='blood_status'] option:selected").val();
        var status = $(this).find("input[name='status']").val();

        var table = $('.' + status + ' table');
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../process.php',
            data: data,
            async: true,
            success: function (response) {
                if (response === "success") {
                    $(".register-form").removeAttr('style');
                    console.log(table.find('tbody tr').length);
                    if (table.find('tbody tr').length == 0) {
                        table.find('tfoot').remove();
                        table.append('<tbody></tbody>');
                    }
                    table.find('tbody').append('<tr>' +
                        '<td>' + name + ' ' + surname + '</td>' +
                        '<td>' + age + '</td>' +
                        '<td>' + race + '</td>' +
                        '<td>' + sex + '</td>' +
                        '<td>' + patronum + '</td>' +
                        '<td>' + house + '</td>' +
                        '<td>' + blood_status + '</td>' +
                        '</tr>');
                    if ($('.new_wizard').length > 0) {
                        table.find('tbody tr').last().append("<td>" + "<a href='delete=" + nickname + "'><i class='fas fa-times'></i></a>" + "</td>");
                    }
                }
                else {
                    alert('error');
                }
            }
        });
        return false;
    });

    $(".remove a").click(function (e) {
        e.preventDefault();
        var nick = $(this).attr('href');
        console.log(nick);
        $.ajax({
            type: 'POST',
            url: '../process.php',
            data: nick,
            async: true,
            success: function (response) {
                if (response === "success") {
                    $("body").append("<p>" + nick + "</p>")
                }
                else {
                    alert('error');
                }
            }
        });
        return false;
    });

});
