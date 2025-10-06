<div class="w-full h-full flex flex-col justify-around sm:flex-row">
    <div class="flex flex-col text-2xl text-center my-8 p-0 sm:p-4 sm:my-0">
        <b>Alles klar, <?= $_POST['userName'] ?>.</b>
        <b>Dann wollen wir doch mal loslegen.</b>
    </div>
    <div class="page-content w-full" style="max-width: 500px;height:100%">
        <form method="POST" action="<?= Helpers\UrlHelper::getCurrentHostAddress().'/register/verify-email' ?>">
            <input type="text" name="csrfToken" class="hidden" value="<?= $_SESSION['CSRF_TOKEN'] ?? '' ?>" />

            <div>
                <b>Meine E-Mail-Adresse ist</b>
                <input class="mt-4 w-full" type="text" name="email" value="<?= $_SESSION['email'] ?? '' ?>" />
            </div>

            <div class="mt-4">
                <b>Mein Passwort lautet</b>
                <input class="mt-4 w-full" type="password" name="password" value="<?= $_SESSION['password'] ?? '' ?>" />
            </div>

            <div class="mt-4">
                <b>Ich wiederhole mein Passwort:</b>
                <input class="mt-4 w-full" type="password" name="repeatPassword" />
            </div>

            <div class="flex flex-row justify-end w-full mt-8">
                <button type="submit">Weiter</button>
            </div>
        </form>
    </div>
</div>