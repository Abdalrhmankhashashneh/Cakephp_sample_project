function add_users_form() {
    $('#result-content').html('loading...');
    $.ajax({
        url: '/adminpanel/users/add_users_form',
        success: function(data) {
            $('#result-content').html(data);
        }
    });

}

function add_user() {

    let op = true;

    //valdation form here
    if ($('#first_name').val() == '') {
        alert('first_name');
        $('#first_name').focus();
        $('#first_name').css('border', 'red');
        op = false;
    }
    if ($('#last_name').val() == '') {
        alert('last_name');
        $('#last_name').focus();
        $('#last_name').css('border-color', 'red');
        op = false;
    }
    if ($('#email').val() == '') {
        $('#email').focus();
        $('#email').css('border-color', 'red');
        op = false;
    }
    if ($('#phone').val() == '') {
        $('#phone').focus();
        $('#phone').css('border-color', 'red');
        op = false;
    }

    if ($('#password').val() == '') {
        $('#password').focus();
        $('#password').css('border-color', 'red');
        op = false;
    }

    if ($('#role').val() == '') {
        $('#role').focus();
        $('#role').css('border-color', 'red');
        op = false;
    }


    if (op) {
        $.ajax({
            url: '/adminpanel/users/add_user',
            type: 'POST',
            data: {
                first_name: $('#first_name').val(),
                last_name: $('#last_name').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                role: $('#role').val()
            },
            success: function() {
                window.location.reload();
            },
        });

    }

}

function edit_user_form(user_id) {
    $('#result-content').html('loading...');
    $.ajax({
        url: '/adminpanel/users/edit_users_form/' + user_id,
        success: function(data) {
            $('#result-content').html(data);
        }
    });

}

function edit_users(user_id) {
    let op = true;

    //valdation form here
    if ($('#first_name').val() == '') {
        alert('first_name');
        $('#first_name').focus();
        $('#first_name').css('border', 'red');
        op = false;
    }
    if ($('#last_name').val() == '') {
        alert('last_name');
        $('#last_name').focus();
        $('#last_name').css('border-color', 'red');
        op = false;
    }
    if ($('#email').val() == '') {
        $('#email').focus();
        $('#email').css('border-color', 'red');
        op = false;
    }
    if ($('#phone').val() == '') {
        $('#phone').focus();
        $('#phone').css('border-color', 'red');
        op = false;
    }

    if ($('#password').val() == '') {
        $('#password').focus();
        $('#password').css('border-color', 'red');
        op = false;
    }

    if ($('#role').val() == '') {
        $('#role').focus();
        $('#role').css('border-color', 'red');
        op = false;
    }


    if (op) {
        $.ajax({
            url: '/adminpanel/users/edit_users/' + user_id,
            type: 'POST',
            data: {
                first_name: $('#first_name').val(),
                last_name: $('#last_name').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                role: $('#role').val()
            },
            success: function() {
                window.location.reload();
            },
        });

    }

}
