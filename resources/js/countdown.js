// Ziel-Datum: 08.09.2025 12:00 Uhr Berlin (UTC+2)
    const targetDate = new Date(Date.UTC(2025, 8, 8, 10, 0, 0)); // September ist Monat 8 (0-basiert), 10:00 UTC = 12:00 Berlin

    const countdownEl = document.getElementById('countdown');
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    if (countdownEl && daysEl && hoursEl && minutesEl && secondsEl) {
        const updateCountdown = () => {
            const now = new Date();
            let diff = targetDate - now;

            if (diff <= 0) {
                countdownEl.innerHTML = '<span class="text-green-700 font-bold">Es ist soweit!</span>';
                clearInterval(timer);
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            diff -= days * (1000 * 60 * 60 * 24);
            const hours = Math.floor(diff / (1000 * 60 * 60));
            diff -= hours * (1000 * 60 * 60);
            const minutes = Math.floor(diff / (1000 * 60));
            diff -= minutes * (1000 * 60);
            const seconds = Math.floor(diff / 1000);

            daysEl.textContent = String(days).padStart(2, '0');
            hoursEl.textContent = String(hours).padStart(2, '0');
            minutesEl.textContent = String(minutes).padStart(2, '0');
            secondsEl.textContent = String(seconds).padStart(2, '0');
        };

        const timer = setInterval(updateCountdown, 1000);
        updateCountdown();
    }
