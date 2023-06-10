
$(document).ready(function() {
    $('#btn-register').click(function(e) {
      e.preventDefault();
      
      // Mengambil data dari form
      var usernameSponsor = $('#usernameSponsor').val();
      var username = $('#username').val();
      var nama = $('#nama').val();
      var email = $('#email').val();
      var no_telp = $('#no_Telp').val();
      var nik = $('#nik').val();
      var npwp = $('#npwp').val();
      var password1 = $('#password1').val();
      var password2 = $('#password2').val();
      var peringkat = $('#peringkat').val();
      
      // Membuat objek data yang akan dikirim
      var data = {
        usernameSponsor: usernameSponsor,
        username: username,
        nama: nama,
        email: email,
        no_telp: no_telp,
        nik: nik,
        npwp: npwp,
        password1: password1,
        password2: password2,
        peringkat: peringkat
      };
      
      // Mengirim data ke server menggunakan Ajax
      $.ajax({
        url: '<?= base_url("agen"); ?>',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function(response) {
          // Menampilkan pesan sukses atau error
          if (response.status === 'success') {
            // Menampilkan pesan sukses
            $('#alert').html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
          } else {
            // Menampilkan pesan error
            $('#alert').html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
          }
        },
        error: function() {
          // Menampilkan pesan error
          $('#alert').html('<div class="alert alert-danger" role="alert">Error occurred while processing the request.</div>');
        }
      });
    });
  });
  
