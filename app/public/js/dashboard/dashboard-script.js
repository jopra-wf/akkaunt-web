

    function redirect(url) {
        location.replace(url)
    }

    function showModal(content = null) {
        $('html').css("overflow","hidden");
        $('.modal-background').show();
    }

    function hideModal(content = null) {
        $('html').css("overflow","visible");
        $('.modal-background').hide();
    }

    hideModal();

$(document).ready(function() {
    //$( "#btn_nav_inbox" ).on( "click", function() {
    //    alert( "Handler for `click` called." );
    //});
});