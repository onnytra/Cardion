function confirmInput(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Membuat Data Baru",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Simpan',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            const reason = result.value;
            Swal.fire(
                'Input',
                'Data Akan Diproses!',
                'success'
            ).then(() => {
                const form = event.target.form;
                form.submit();
                console.log('data');
            });
        }
    });
}

function confirmEdit(event){
    event.preventDefault();
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Memperbarui Data Ini",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Perbarui',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            const reason = result.value;
            Swal.fire(
                'Perbaruan',
                'Data Akan Diproses!',
                'success'
            ).then(() => {
                const form = event.target.form;
                form.submit();
            });
        }
    }
    );
}

function confirmIkutUjian(url) {
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Mengikuti Ujian Ini",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Ikut',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Ikut Ujian',
                'Anda Mengikuti Ujian Ini!',
                'success'
            ).then(() => {
                window.location.href = url;
            });
        }
    });
}

function confirmKumpulkanUjian(url){
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
                window.location.href = url;
            });
        }
    });
}

function confirmfResetMonitoring(url){
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Mereset Data Ujian Peserta Ini",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Reset',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Reset Peserta',
                'Data Akan Diproses!',
                'success'
            ).then(() => {
                window.location.href = url;
            });
        }
    });
}