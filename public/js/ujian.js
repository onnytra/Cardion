// // Cheat Detection
let isReloading = false;
let blurTimer;
const blurDuration = 3000; // 3 detik

function matchesUrlPattern(url, pattern) {
    const regex = new RegExp(pattern.replace(/x|y|z/g, '\\d+'));
    return regex.test(url);
}

const urlPatterns = [
    'http://127.0.0.1:8000/olimpiade/ujian/detail/start/x/y/z',
    'http://127.0.0.1:8000/olimpiade/ujian/finish'
];

window.addEventListener('beforeunload', function() {
    if (urlPatterns.some(pattern => matchesUrlPattern(window.location.href, pattern))) {
        isReloading = true;
    }
});

window.addEventListener('blur', function() {
    blurTimer = setTimeout(function() {
        if (!isReloading) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });            
            $.ajax({
                url: '/olimpiade/ujian/assign-test/cheat',
                type: 'PUT',
                data: {
                    id_ujian: id_ujian,
                    alasan_kecurangan: 'Peserta Meninggalkan Halaman Ujian'
                },
                success: function() {
                    window.location.href = '/olimpiade/ujian/cheat-detected';
                },
                error: function() {
                    console.log('Deteksi Kecurangan Gagal');
                }
            });
        } else {
            isReloading = false;
        }
    }, blurDuration);
});

window.addEventListener('focus', function() {
    clearTimeout(blurTimer);
});

document.addEventListener('keydown', function (event) {
    console.log(event.key);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });            
    $.ajax({
        url: '/olimpiade/ujian/assign-test/cheat',
        type: 'PUT',
        data: {
            id_ujian: id_ujian,
            alasan_kecurangan: 'Peserta Menekan Tombol ' + event.key
        },
        success: function() {
            window.location.href = '/olimpiade/ujian/cheat-detected';
        },
        error: function() {
            console.log('Deteksi Kecurangan Gagal');
        }
    });
});


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

// alert kumpulkan ujian
function confirmKumpulkanUjian() {
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Mengumpulkan Jawaban",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Kumpulkan',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Kumpulkan Jawaban',
                'Data Akan Diproses!',
                'success'
            ).then(() => {
                document.getElementById('finish-ujian-form').submit();
            });
        }
    });
}