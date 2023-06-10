$(document).ready(function() {
    $('#togglePassword').click(function() {
        var passwordInput = $('#exampleInputPassword');
        var passwordFieldType = passwordInput.attr('type');
        
        if (passwordFieldType === 'password') {
            passwordInput.attr('type', 'text');
            $('#togglePassword').removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordInput.attr('type', 'password');
            $('#togglePassword').removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });
});