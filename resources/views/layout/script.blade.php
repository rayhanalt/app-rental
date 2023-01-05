<script src="{{ asset('js/flatpickr.js') }}"></script>
<script>
    flatpickr('.datepicker', {
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d'
    });
</script>
{{-- <script>
    /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('harga_sewa');
    tanpa_rupiah.addEventListener('keyup', function(e) {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    /* Fungsi */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script> --}}
<script>
    document.getElementById('gambar').addEventListener('change', function(e) {
        // Mengambil file gambar yang dipilih
        let file = e.target.files[0];

        // Membuat objek FileReader
        let reader = new FileReader();

        // Menentukan callback untuk file yang sudah selesai dibaca
        reader.onload = function(e) {
            // Menampilkan preview gambar pada elemen img
            document.getElementById('preview-gambar').src = e.target.result;
        }

        // Membaca file gambar yang dipilih
        reader.readAsDataURL(file);
    });
</script>
@livewireScripts
