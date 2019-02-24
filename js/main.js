$('document').ready(function () {

    $("#login-form").submit(function () {
        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: data,
            async: true,
            success: function (response) {
                if (response === "success") {
                    alert('ok');
                }
                else {
                    alert('error');
                }
            }
        });
        return false;
    });

});