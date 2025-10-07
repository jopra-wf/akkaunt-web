        </div>
        <div>.</div>

        <div class="modal-background">
            <div class="modal">
                <h3>Modal title</h3>
                <span>Modal Text</span>
                <button onclick="hideModal()">Ok</button>
            </div>
        </div>

        <script src="<?=Helpers\UrlHelper::GetCurrentHostAddress()?>/public/js/dashboard/dashboard-script.js"></script>
        <script>
            const btns = document.querySelectorAll('button');
            for (const btn of btns) {
            btn.addEventListener('click', function() {
                if ('vibrate' in navigator) {
                    // Trigger a 200ms vibration
                    navigator.vibrate(5);
                }
            });
            }
        </script>
    </body>
</html>