<div class="w-full h-full flex flex-col justify-around sm:flex-row">
    <div class="flex flex-col text-2xl text-center my-8 p-0 px-4 sm:p-4 sm:my-0">
        <b>Wir sind gleich fertig.</b>
        <b>Bestätige noch einmal kurz deine E-Mail-Adresse!</b>
    </div>
    <div class="page-content w-full" style="max-width: 500px;height:100%">
        <form method="POST" action="<?= Helpers\UrlHelper::getCurrentHostAddress().'/register/continue' ?>">
            <input type="text" name="csrfToken" class="hidden" value="<?= $_SESSION['CSRF_TOKEN'] ?? '' ?>" />

            <div>
                <b>Bitte gebe hier deinen Code ein, den du unter der Email-Adresse <?= $_POST['email'] ?? '' ?> erhalten hast.</b>
                <input class="mt-4 w-full text-center" type="tel" name="otpCode" value="<?= $_SESSION['otp'] ?? '' ?>" />
            </div>

            <div class="flex flex-row gap-2 justify-end w-full mt-8">
                <button class="secondary" type="submit">E-Mail erneut senden</button>
                <button type="submit">Fertig</button>
            </div>
        </form>
    </div>
</div>