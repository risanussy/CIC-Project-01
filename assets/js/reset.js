  // Ambil elemen tombol Reset
  var resetButton = document.querySelector('.btn-register-reset');

  // Tambahkan event listener untuk mengatur fungsi resetForm saat tombol diklik
  resetButton.addEventListener('click', resetForm);

  // Definisikan fungsi resetForm
  function resetForm() {
    // Dapatkan elemen form yang ingin direset
    var formElement = document.querySelector('form');

    // Dapatkan semua elemen input di dalam form
    var inputElements = formElement.querySelectorAll('input');

    // Reset nilai-nilai dalam elemen input
    inputElements.forEach(function(input) {
      input.value = ''; // Mengosongkan nilai input
    });

    // Contoh pesan untuk menunjukkan bahwa form berhasil direset
    console.log('Form berhasil direset!');
  }