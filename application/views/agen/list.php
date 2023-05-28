<a href="<?= base_url('agen') ?>" class="btn btn-sm btn-neutral mb-4 bg-dark text-success ml-5 mt-3"><i class="fa fa-plus mr-1 mt-3"></i> Tambah Agen Baru</a>
<div class="container-fluid mt--6" style="overflow-x:scroll">
  <div class="row">
    <div class="col">
      <div class="card"  style="width: 2000px">
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
                <th scope="col" class="text-center text-light" style="width: 600px">Tipe</th>
                <th scope="col" class="text-center text-light" style="width: 600px">Status</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Tanggal Daftar</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Terakhir Login</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Username</th>
                <th scope="col" class="text-center text-light" style="width: 1000px">Proses</th>
              </tr>
              <tr role="row" class="filter" style="background-color: #f6f9fc">
                <td></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_sponsor" /></td>
                <td>
                  <select name="search_package" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="agent">Agen</option>
                    <option value="basic">Agen Pemula</option>
                    <option value="senior">Agen Senior</option>
                    <option value="executive">Agen Eksekutif</option>
                  </select>
                </td>
                <td>
                  <div class="mb-2">
                    <input type="text" class="form-control form-control-sm form-filter" name="search_phone" placeholder="Search Phone" />
                  </div>
                  <input type="text" class="form-control form-control-sm form-filter" name="search_email" placeholder="Search Email" />
                </td>
                <td>
                  <select name="search_type" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="2">Member</option>
                    <option value="3">Stockist</option>
                  </select>
                </td>
                <td>
                  <select name="search_status" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="1">Active</option>
                    <option value="2">Blacklist</option>
                  </select>
                </td>
                <td>
                  <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                    </span>
                  </div>
                  <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                    </span>
                  </div>
                </td>
                <td></td>
                <td><input type="text" class="form-control form-control-sm form-filter" /></td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-submit" id="btn_list" title="Search"><i class="fa fa-search"></i></button>
                  <button class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel" title="Reset"><i class="fa fa-times"></i></button>
                </td>
              </tr>
            </thead>
            <tr>
              <td>1.</td>
              <td>hacker</td>
              <td>Anonimoes</td>
              <td>Spotify</td>
              <td>Agen Eksekutif</td>
              <td>
                <span>1226</span><br>
                <span>angga@gmail.com</span>
              </td>
              <td>Direktur</td>
              <td>Active</td>
              <td>??????</td>
              <td>Pake Nanya</td>
              <td>Hacker</td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-success btn-tooltip status-member" data-original-title="Status Member">
                  <i class="fas fa-user profile-icon"></i>
                </a>
                <a href="" class="btn btn-sm btn-outline-success btn-tooltip status-member" data-original-title="Generation"><i class="fas fa-network-wired"></i>
              </a>
                <a href="#" class="btn btn-sm btn-outline-warning btn-tooltip status-member" data-original-title="Login">
                  <i class="fas fa-user profile-icon"></i>
                </a>
                <a href="#" class="btn btn-sm btn-outline-danger btn-tooltip status-member" data-original-title="Remove">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Tanggang</td>
              <td>Anonimoes</td>
              <td>Spotify</td>
              <td>Agen Eksekutif</td>
              <td>
                <span>1226</span><br>
                <span>Tanggang@gmail.com</span>
              </td>
              <td>Direktur</td>
              <td>Active</td>
              <td>??????</td>
              <td>Pake Nanya</td>
              <td>Tanggang</td>
              <td></td>
            </tr>
            <!-- Data akan ditempatkan di sini -->
          </tbody>
        </table>
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
