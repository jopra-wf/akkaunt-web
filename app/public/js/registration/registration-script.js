function showLoader() {
    $('#sp_loader').addClass('hidden');
    $('#sp_loader').removeClass('inline-block');
}

function hideLoader() {
    $('#sp_loader').addClass('inline-block');
    $('#sp_loader').removeClass('hidden');
}

$(document).ready(function() {
    hideLoader();
});

$("#frm_userName").on("submit", function(event) {
    showLoader();
    $('#btn_submit').disabled = "true";
    let txt_userName = $('#txt_userName');
    if(!txt_userName.val().match('/^[\w.-]{3,30}$/')) {
        $('#err_username').removeClass('hidden')
        hideLoader();
        event.preventDefault();
    }
});