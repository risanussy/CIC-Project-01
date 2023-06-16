<!-- Footer -->
<footer class="bg-white mt-5" style="bottom: 20px; width: 100%; text-align: center;">
     <div class="container">
          <div class="text-center">
               <span>&copy; B-community site <?= date('Y'); ?></span>
          </div>
     </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                    </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
               </div>
          </div>
     </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
     $('#list_table').DataTable({
          "paging": true, // Mengaktifkan pagination
          "searching": true, // Mengaktifkan fitur pencarian
     });
});
</script>
<script>
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
                         $('#alert').html(
                              '<div class="alert alert-success" role="alert">' +
                              response.message + '</div>');
                    } else {
                         // Menampilkan pesan error
                         $('#alert').html(
                              '<div class="alert alert-danger" role="alert">' +
                              response.message + '</div>');
                    }
               },
               error: function() {
                    // Menampilkan pesan error
                    $('#alert').html(
                         '<div class="alert alert-danger" role="alert">Error occurred while processing the request.</div>'
                         );
               }
          });
     });
});
</script>


</body>

</html>