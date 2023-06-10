<a href="<?= base_url('agen') ?>" class="btn btn-sm btn-neutral mb-4 bg-dark text-success ml-5 mt-3"><i class="fa fa-plus mr-1 mt-3"></i> Tambah Agen Baru</a>
<div class="container-fluid mt--6" style="overflow-x:scroll">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 2000px">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0 text-dark">List Agen</h3>
            </div>
          </div>
        </div>
        <div class="table-container">
          <table class="table align-items-center table-flush" id="list">
            <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
              <tr role="row" class="heading">
                <th scope="col" style="width: 100px; color: white;">#</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Username</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Nama</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Sponsor</th>
                <th scope="col" class="text-center text-light" style="width: 630px">Peringkat</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Kontak</th>
                <th scope="col" class="text-center text-light" style="width: 600px">Status</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Tanggal Daftar</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Terakhir Login</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Proses</th>
              </tr>
              <tr role="row" class="filter" style="background-color: #f6f9fc">
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($agen as $row) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['username']; ?></td>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['usernameSponsor']; ?></td>
                  <td><?= $row['peringkat']; ?></td>
                  <td>
                    <span><?= $row['no_telp']; ?></span><br>
                    <span><?= $row['email']; ?></span>
                  </td>
                  <td>
                    <?php if ($row['is_active'] == 1): ?>
                      Active
                    <?php else: ?>
                      Blacklist
                    <?php endif; ?>
                  </td>
                  <td><?= $row['date_create']; ?></td>
                  <td><?= $row['last_login']; ?></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-success btn-tooltip status-member" data-original-title="Status Member">
                      <i class="fas fa-user profile-icon"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success btn-tooltip status-member" data-original-title="Generation">
                      <i class="fas fa-network-wired"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-warning btn-tooltip status-member" data-original-title="Login">
                      <i class="fas fa-user profile-icon"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-danger btn-tooltip status-member" data-original-title="Remove">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              <!-- Data akan ditempatkan di sini -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  // Fungsi untuk menambahkan event listener pada semua elemen dengan kelas "status-member"
  function initializeStatusMembers() {
    var statusMembers = document.querySelectorAll('.status-member');

    statusMembers.forEach(function (statusMember) {
      var originalTitle = statusMember.getAttribute('data-original-title');
      var tooltipElement = document.createElement('div');

      // Gaya CSS untuk tooltip
      tooltipElement.classList.add('tooltip');
      tooltipElement.classList.add('tooltip-bottom'); // Ganti ke 'tooltip-top' untuk tampilan di atas ikon
      tooltipElement.textContent = originalTitle;

      // Event listener untuk menampilkan dan menyembunyikan tooltip
      statusMember.addEventListener('mouseenter', function () {
        tooltipElement.style.opacity = '1';
      });

      statusMember.addEventListener('mouseleave', function () {
        tooltipElement.style.opacity = '0';
      });

      // Memasukkan tooltip ke dalam elemen dengan kelas "status-member"
      statusMember.appendChild(tooltipElement);
    });
  }

  // Panggil fungsi untuk menginisialisasi status member pada saat halaman selesai dimuat
  window.addEventListener('load', initializeStatusMembers);
</script>

<style>
  .tooltip {
    position: absolute;
    padding: 5px;
    background-color: #000;
    color: #fff;
    font-size: 12px;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s;
    z-index: 999;
    border-radius: 4px;
    border: 2px solid #000;
    max-width: 200px;
    text-align: center;
  }
</style>
