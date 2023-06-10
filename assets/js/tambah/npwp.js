document.addEventListener("DOMContentLoaded", function() {
    var npwpInput = document.getElementById("npwp");

    npwpInput.addEventListener("blur", function() {
      var npwpValue = npwpInput.value.trim();

      if (npwpValue === "" || !isValidNPWP(npwpValue)) {
        npwpInput.value = "000000000000000";
      }
    });

    function isValidNPWP(npwp) {
      // Tambahkan logika validasi NPWP Anda di sini
      // Ini adalah contoh dasar, Anda dapat menyesuaikannya sesuai dengan format NPWP yang sebenarnya
      var npwpRegex = /^\d{15}$/;
      return npwpRegex.test(npwp);
    }
  });