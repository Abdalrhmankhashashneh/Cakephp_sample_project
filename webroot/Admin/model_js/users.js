function add_users_form() {
    alert('add_users_form');
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
    form_data = new FormData();
    //valdation form here
    if ($('#first_name').val() === '') {
        alert('first_name');
        $('#first_name').focus();
        $('#first_name').css('border', 'red');
        op = false;
    } else {
        $('#first_name').css('border', 'green');
        form_data.append('first_name', $('#first_name').val());

    }
    if ($('#last_name').val() == '') {
        alert('last_name');
        $('#last_name').focus();
        $('#last_name').css('border-color', 'red');
        op = false;
    } else {
        $('#last_name').css('border-color', 'green');
        form_data.append('last_name', $('#last_name').val());

    }
    if ($('#email').val() == '') {
        $('#email').focus();
        $('#email').css('border-color', 'red');
        op = false;
    } else {
        $('#email').css('border-color', 'green');
        form_data.append('email', $('#email').val());

    }
    if ($('#phone').val() == '') {
        $('#phone').focus();
        $('#phone').css('border-color', 'red');
        op = false;
    } else {
        $('#phone').css('border-color', 'green');
        form_data.append('phone', $('#phone').val());

    }

    if ($('#password').val() == '') {
        $('#password').focus();
        $('#password').css('border-color', 'red');
        op = false;
    } else {
        $('#password').css('border-color', 'green');
        form_data.append('password', $('#password').val());

    }

    if ($('#role').val() == '') {
        $('#role').focus();
        $('#role').css('border-color', 'red');
        op = false;
    } else {
        $('#role').css('border-color', 'green');
        form_data.append('role', $('#role').val());

    }

    if (op) {
        $.ajax({
            url: '/adminpanel/users/add_user',
            type: 'POST',
            data: form_data,
            success: function(data) {
                $('#result-content').html(data);
            },
            error: function(data) {
                alert('error');
            }
        });

    }

}