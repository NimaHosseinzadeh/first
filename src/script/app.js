const input_first_name = document.getElementById('input_first_name')
const input_last_name = document.getElementById('input_last_name')
const input_email = document.getElementById('input_email')
const input_password = document.getElementById('input_password')
const input_submit  = document.getElementById('input_submit')


input_submit.addEventListener('click', function() {

    if (input_first_name.value.length < 3 || input_first_name.value.length > 25) {
        return alert('طول نام باید بین 3 تا 25 باشد!');
    }

    if (input_last_name.value.length < 3 || input_last_name.value.length > 50) {
        return alert('طول نام خانوادگی باید بین 3 تا 50 باشد!');
    }

    if (input_email.value.length < 5 || input_email.value.length > 254) {
        return alert('طول ایمیل باید بین 5 تا 254 باشد!');
    }

    if (input_password.value.length < 6 || input_password.value.length > 254) {
        return alert('طول رمز عبور باید بین 6 تا 254 باشد!');
    }

});
