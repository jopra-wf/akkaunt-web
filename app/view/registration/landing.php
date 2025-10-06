<div class="w-full h-full flex flex-col justify-around sm:flex-row">
    <div class="flex flex-col text-2xl text-center my-8 p-0 sm:p-4 sm:my-0">
        <b>Guten Tag,</b>
        <b>wie heißt du?</b>
    </div>
    <div class="page-content w-full" style="max-width: 500px;height:100%">
        <form id="frm_userName" method="POST" action="<?= Helpers\UrlHelper::getCurrentHostAddress().'/register/create-account' ?>">
            <input type="text" name="csrfToken" class="hidden" value="<?= $_SESSION['CSRF_TOKEN'] ?? '' ?>" />
            <div>
                <b>Mein Benutzername ist</b>
                <input id="txt_username" class="mt-4 w-full" type="text" name="userName" required />
                <div id="err_username" class="flex flex-row items-center gap-4 mt-2 hidden">
                    <img alt="error" src="<?= Helpers\UrlHelper::GetCurrentHostAddress().'/public/icons/light/ic_error_24dp.svg' ?>"></script>
                    <b style="color:var(--md-sys-color-error)" class="text-sm">Ein valider Benutzername kann nur Buchstaben, Zahlen, Punkte, Binde- und Unterstriche enthalten und sind 3-30 Zeichen lang.</b>
                </div>
            </div>
            <div class="flex flex-row justify-end content-center mt-8 gap-2">
                <label id="cbx_acceptedTermsAndConditions" for="acceptedTermsAndConditions"><span class="text-xs text-end">Ich bestätige, dass ich die AGB und Datenschutzerklärung gelesen habe und damit einverstanden bin.</span></label><br>
                <input type="checkbox" name="acceptedTermsAndConditions" required>
            </div>
            <div class="flex flex-row justify-end items-center w-full mt-8 gap-4">
                <span id="sp_loader" class="loader"></span>
                <button id="btn_submit" type="submit">Weiter</button>
            </div>
        </form>
    </div>
</div>

<script src="<?= Helpers\UrlHelper::GetCurrentHostAddress().'/public/js/registration/registration-script.js' ?>"></script>