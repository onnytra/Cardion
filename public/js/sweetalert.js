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
        text: "Anda Akan Mengedit Data Ini",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Edit',
        cancelButtonText: 'Tidak, Batalkan',
    }).then((result) => {
        if (result.isConfirmed) {
            const reason = result.value;
            Swal.fire(
                'Edit',
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