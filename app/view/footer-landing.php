
</div>
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