function setActive(element) {
    // Remove active class from all links
    document.querySelectorAll('a').forEach(function(el) {
        el.classList.remove('active');
    });

    // Add active class to clicked link
    element.classList.add('active');
}

// function filterDokter() {
//     const jenisLayanan = document.querySelector('input[name="jenisLayanan"]:checked').value;
//     const dokterOptions = document.querySelectorAll('.dokter-option');

//     // Iterasi melalui semua option dokter dan tampilkan hanya yang sesuai
//     dokterOptions.forEach(option => {
//         if (option.getAttribute('data-spesialis') === jenisLayanan) {
//             option.style.display = 'block'; // Tampilkan option
//         } else {
//             option.style.display = 'none'; // Sembunyikan option
//         }
//     });

//     // Reset pilihan dokter saat layanan diubah
//     document.getElementById('jadwal_id').selectedIndex = 0;
// }
