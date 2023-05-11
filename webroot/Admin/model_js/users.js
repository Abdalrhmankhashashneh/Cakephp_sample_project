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