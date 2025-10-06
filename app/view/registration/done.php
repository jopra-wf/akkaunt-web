<div class="w-full h-full flex flex-col justify-around sm:flex-row">
    <div class="flex flex-col text-2xl text-center my-8 p-0 px-4 sm:p-4 sm:my-0">
        <b>Herzlich Willkommen, <?= print_r($data) ?>!</b>
        <b>Schön dich zu sehen!</b>
    </div>
    <div class="page-content w-full" style="max-width: 500px;height:100%">
            <div>
                <h3>Du bist fertig!</h3>
                <span>Was möchtest du jetzt machen?</span>
            </div>

            <div class="flex flex-row gap-2 justify-end w-full mt-8">
                <button class="secondary" type="submit">E-Mail erneut senden</button>
                <button type="submit">Fertig</button>
            </div>
    </div>
</div>