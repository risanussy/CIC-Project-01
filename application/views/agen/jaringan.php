<div class="container-fluid mt--6" style="overflow-x: scroll;">
  <div class="row mt-5">
    <div class="col">
      <div class="card" style="width: 2000px;">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0 text-dark">List Generasi Agen</h3>
            </div>
          </div>
        </div>
        <div class="table-container">
          <table class="table align-items-center table-flush cell-border stripe order-column hover" id="list_table">
            <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
              <tr role="row" class="heading">
                <th scope="col" style="width: 100px; color: white;">#</th>
                <th scope="col" class="text-center text-light" style="width: 400px;">Username</th>
                <th scope="col" class="text-center text-light" style="width: 400px;">Nama</th>
                <th scope="col" class="text-center text-light" style="width: 400px;">Sponsor</th>
                <th scope="col" class="text-center text-light" style="width: 300px;">Peringkat</th>
                <th scope="col" class="text-center text-light" style="width: 400px;">Generasi</th>
                <th scope="col" class="text-center text-light" style="width: 300px;">Group</th>
                <th scope="col" class="text-center text-light" style="width: 200px;">Terakhir Login</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($agen as $row) : ?>
                <tr>
                  <td class="text-center"><?= $i; ?></td>
                  <td class="text-center"><?= $row['username']; ?></td>
                  <td class="text-center"><?= $row['nama']; ?></td>
                  <td class="text-center"><?= $row['peringkat']; ?></td>
                  <td class="text-center">
                    <?php if ($row['usernameSponsor'] == 'admin'): ?>
                      <button class="btn btn-sm btn-outline-success">GEN-1</button>
                    <?php elseif ($row['usernameSponsor'] == 'angga'): ?>
                      <button class="btn btn-sm btn-outline-success">GEN-2</button>
                    <?php else: ?>
                      <!-- Tambahkan logika untuk kondisi lain jika diperlukan -->
                    <?php endif; ?>
                  </td>
                  <td class="text-center"><?= $row['date_create']; ?></td>
                  <td class="text-center"><?= $row['last_login']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
