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
                    <div class="table-container" style="padding:15px">
                         <table class="table align-items-center table-flush cell-border stripe order-column hover" id="list_table">
                              <thead class="thead-primary"
                                   style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
                                   <tr role="row" class="heading">
                                        <th scope="col" style="width: 10px;color:white">#</th>
                                        <th scope="col" class="text-center text-light">Pendaftaran</th>
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
                              <tbody class="list">
                              <?php foreach ($regis as $row) : ?>
                                   <tr>
                                   <td class="text-center"><?= $i; ?></td>
                                   <td class="text-center"><?= $row['pendaftaran']; ?></td>
                                   <td class="text-center"><?= $row['sponsor']; ?></td>
                                   <td class="text-center"><span class="badge badge-danger"><?= $row['username']; ?></span></td>
                                   <td class="text-center"><?= $row['fullname']; ?></td>
                                   <td class="text-center"></td>
                                   <td class="text-center"></td>
                                   <td class="text-center"><?= $row['npwp']; ?></td>
                                   <td class="text-center"><?= $row['provinsi']; ?></td>
                                   <td class="text-center"><?= $row['alamat']; ?></td>
                                   <td class="text-center"><?= $row['produk']; ?></td>
                                   <td class="text-center"><?= $row['bank']; ?></td>
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