$(document).ready(function () {

    $('#sendMail').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: $('#contact-form').serialize(),
            beforeSend: function () {
                $('#message').fadeIn();
                $('#message').addClass('text-pink').html('Sending Mail.....');
            },
            success: function (response) {
                $('#contact-form').trigger("reset");
                $('#message').fadeIn();
                $('#message').addClass('text-pink bg-dark rounded p-2 mb-2 h5').html(response);
                setTimeout(function () {
                    $('#message').fadeOut('slow');
                }, 5000);   
            }
        });


    });

});

