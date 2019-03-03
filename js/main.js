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
        var name = $(this).find("input[name='name']").val();
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '../process.php',
            data: data,
            async: true,
            success: function (response) {
                if (response === "success") {
                    $("body").append("<p>" + name + "</p>")
                }
                else {
                    $("body").append("<p>error</p>")
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
                    $("body").append("<p>error</p>")
                }
            }
        });
        return false;
    });

});
