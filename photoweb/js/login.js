$(document).ready(function () {
    $('.main-content').hide();
    $('.main-content').slideDown(1000);
    $('.alert').hide();

    $('.login').click(function () { // $('#login-content').load('./Inc/login-join.php #login-content');
        $('.shift-button-login').addClass('select-login-button');
        $('.shift-button-signup').removeClass('select-login-button');
    });

    $('.join').click(function () { // $('#login-content').load('./Inc/login-join.php #signup-content');
        $('.shift-button-login').removeClass('select-login-button');
        $('.shift-button-signup').addClass('select-login-button');
    });

    $('.shift-button-login').click(function () {
        $('.shift-button-login').addClass('select-login-button');
    });

    $('.shift-button-signup').click(function () {
        $('.shift-button-signup').addClass('select-login-button');
    });


    // Validate Sign Up form
    $('#signup-form').validate({
        rules: {
            username: "required",
            email: "required",
            password: {
                required: true,
                minlength: 5
            }

        },
        messages: {
            username: "User name is required",
            email: "Email is required",
            password: {
                required: "Password is required",
                minlength: "Password must be contained minimum 5 Characters"
            }
        }
    })

    // Validate Login Form
    $('#login-form').validate({
        rules: {
            email: "required",
            password: {
                required: true,
                minlength: 5
            }

        },
        messages: {
            email: "Email is required",
            password: {
                required: "Password is required",
                minlength: "Password must be contained minimum 5 Characters"
            }
        }
    });

    // Alerts display
    $('.alert').slideDown(1500);
    $('.alert').slideUp(2000); 

    //Username dispaly
    $('.username-show').hide();
    $('.username-show').fadeIn(1000);
    $('.user_icon').fadeIn(1000);

})
