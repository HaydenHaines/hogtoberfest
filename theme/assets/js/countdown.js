/**
 * Hogtoberfest countdown timer.
 * Reads HOG.countdownTarget (ISO date string, passed via wp_localize_script).
 * Updates DOM every second. When the target date passes, shows launched message.
 */
(function () {
    'use strict';

    function initCountdown() {
        var el = document.querySelector('.hero__countdown');
        if (!el) return;

        var target = (typeof HOG !== 'undefined' && HOG.countdownTarget)
            ? new Date(HOG.countdownTarget).getTime()
            : null;

        if (!target || isNaN(target)) return;

        var numDays    = document.getElementById('countdown-days');
        var numHours   = document.getElementById('countdown-hours');
        var numMinutes = document.getElementById('countdown-minutes');
        var numSeconds = document.getElementById('countdown-seconds');

        if (!numDays || !numHours || !numMinutes || !numSeconds) return;

        function pad(n) {
            return n < 10 ? '0' + n : String(n);
        }

        function tick() {
            var now  = Date.now();
            var diff = target - now;

            if (diff <= 0) {
                el.classList.add('hero__countdown--launched');
                clearInterval(timer);
                return;
            }

            var totalSeconds = Math.floor(diff / 1000);
            var days         = Math.floor(totalSeconds / 86400);
            var hours        = Math.floor((totalSeconds % 86400) / 3600);
            var minutes      = Math.floor((totalSeconds % 3600) / 60);
            var seconds      = totalSeconds % 60;

            numDays.textContent    = pad(days);
            numHours.textContent   = pad(hours);
            numMinutes.textContent = pad(minutes);
            numSeconds.textContent = pad(seconds);
        }

        tick();
        var timer = setInterval(tick, 1000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCountdown);
    } else {
        initCountdown();
    }
}());
