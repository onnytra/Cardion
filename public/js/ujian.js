// Cheat Detection

// Allowed URLs
const allowedUrls = [
    '/olimpiade/ujian/detail',
    '/olimpiade/ujian/finish'
];

// Helper function to check if the current URL is allowed
function isUrlAllowed() {
    const currentUrl = window.location.pathname;
    return allowedUrls.some(url => currentUrl.startsWith(url));
}

// Event listener for keydown
document.addEventListener('keydown', function (event) {
    // Optionally specify which keys to detect as cheating
    // e.g., F12 (Dev Tools), Ctrl, Alt, etc.
    const forbiddenKeys = ['F12', 'Control', 'Alt'];
    if (forbiddenKeys.includes(event.key) || !isUrlAllowed()) {
        window.location.href = '/olimpiade/ujian/cheat-detected';
        console.log('Key pressed:', event.key);
    }
});

// Event listener for tab switch or window blur
window.addEventListener('blur', function() {
    if (!isUrlAllowed()) {
        window.location.href = '/olimpiade/ujian/cheat-detected';
        console.log('Tab is not focused');
    }
});

// // Ujian Timer

// const waktuMulai = new Date("{{ $sesi->mulai }}");
// const waktuBerakhir = new Date("{{ $sesi->berakhir }}");

function finish_ujian() {
    document.getElementById('finishForm').submit();
}

function updateCountdown() {
    const sekarang = new Date();
    const selisih = waktuBerakhir - sekarang;

    if (selisih <= 0) {
        document.getElementById('countdown').textContent = 'Waktu habis';
        finish_ujian();
        return;
    }

    const hours = Math.floor(selisih / (1000 * 60 * 60));
    const minutes = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((selisih % (1000 * 60)) / 1000);

    document.getElementById('countdown').textContent = `${hours}:${minutes}:${seconds}`;
}

setInterval(updateCountdown, 1000);