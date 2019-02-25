$('document').ready(function () {
    /*------------ log in ------------*/
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
                    alert('error');
                }
            }
        });
        return false;
    });

    /*------------  ------------*/
    
});
