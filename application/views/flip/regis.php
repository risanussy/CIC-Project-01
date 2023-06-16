<div class="container-fluid mt--6">
     <div class="row mt-5">
          <div class="col">
               <div class="card">
                    <div class="card-header border-0">
                         <div class="row align-items-center">
                              <div class="col">
                                   <h3 class="mb-0">Pendaftaran Agen </h3>
                              </div>
                         </div>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table align-items-center table-flush" id="list_table">
                        <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
                            <tr role="row" class="heading">
                                <th scope="col" style="width: 10px;color:white">#</th>
                                <th scope="col" class="text-center text-light">Pendaftar</th>
                                <th scope="col" class="text-center text-light">Sponsor</th>
                                <th scope="col" class="text-center text-light">Username</th>
                                <th scope="col" class="text-light">Nama</th>
                                <th scope="col" class="text-center text-light">Omset</th>
                                <th scope="col" class="text-center text-light">Nominal</th>
                                <th scope="col" class="text-center text-light">Status</th>
                                <th class="width15 text-center text-light">Akses</th>
                                <th scope="col" class="text-center text-light">Tanggal Daftar</th>
                                <th scope="col" class="text-center text-light">Tanggal Konfirmasi</th>
                                <th scope="col" class="text-center text-light">Proses</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php foreach ($regis as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row['sponsor']; ?></td>
                                <td><?= $row['fullname']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['nik']; ?></td>
                                <td><?= $row['no_hp']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['npwp']; ?></td>
                                <td><?= $row['provinsi']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['produk']; ?></td>
                                <td><?= $row['pendaftaran']; ?></td>
                                <td><?= $row['bank']; ?></td>
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
