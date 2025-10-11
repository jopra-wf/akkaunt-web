function showLoader() {
    $('#sp_loader').show();
}

function hideLoader() {
    $('#sp_loader').hide();
}

$(document).ready(function() {
    hideLoader();

    $('button#btn_submit').on('click', function() {
        showLoader();
        $('#btn_submit').addClass('disabled');
        $('#btn_submit').property('disabled', true);
    });

    $('input#txt_username').on('change', async function(e){
        const csrfToken = document.getElementById('csrf-token-input').value;
        const formData = new FormData();
        formData.append("key", 'username');
        formData.append("value", $(this).val);
        formData.append("CSRF_TOKEN", csrfToken);

        $.post(location.protocol + '//' + location.host + "/ajax/sessionValue", {
            key: 'username',
            value: $(this).val(),
            CSRF_TOKEN: csrfToken
        });
    });

    $('input#txt_email').on('change', async function(e){
        const csrfToken = document.getElementById('csrf-token-input').value;
        const formData = new FormData();
        formData.append("key", 'email');
        formData.append("value", $(this).val);
        formData.append("CSRF_TOKEN", csrfToken);

        $.post(location.protocol + '//' + location.host + "/ajax/sessionValue", {
            key: 'email',
            value: $(this).val(),
            CSRF_TOKEN: csrfToken
        });
    });

    $("#frm_userName").on("submit", function(event) {
        if($(this).valid()) {
            showLoader();
            $('#btn_submit').disabled = "true";
            let txt_userName = $('#txt_userName');
            if(!txt_userName.val().match('/^[\w.-]{3,30}$/')) {
                $('#err_username').removeClass('hidden')
                hideLoader();
                event.preventDefault();
            }
        } else {
            e.preventDefault();
        }
    });
});