// // Cheat Detection
// window.addEventListener('blur', function () {
//     const currentPath = window.location.pathname;
    
//     // Regex untuk mencocokkan dan menghapus parameter dinamis
//     const cleanedPath = currentPath.replace(/\/\d+/g, '');

//     // Array dari rute yang dikecualikan
//     const excludedRoutes = [
//         '/olimpiade/ujian/detail/start',
//         '/ujian/finish'
//     ];

//     // Fungsi untuk memeriksa apakah path saat ini termasuk dalam rute yang dikecualikan
//     function isExcludedRoute(path) {
//         return excludedRoutes.includes(path);
//     }

//     if (!isExcludedRoute(cleanedPath)) {
//         console.log('BLUR');
//         window.location.href = '/olimpiade/ujian/cheat-detected';
//     }
// });

// document.addEventListener('keydown', function (event) {
//         // window.location.href = '/olimpiade/ujian/cheat-detected';
//         console.log('Key pressed:', event.key);
// });
// // Ujian Timer

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