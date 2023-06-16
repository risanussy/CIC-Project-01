<!-- BEGIN CONTENT -->
<div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-5">
                         <a href="#" class="btn btn-sm btn-neutral" style="background-color: salmon; border: none; color: white;">Total Bonus : 1.430.750 </a>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="container-fluid mt--6">
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header border-0">
                         <div class="row align-items-center">
                              <div class="col">
                                   <h3 class="mb-0">Komisi</h3>
                              </div>
                         </div>
                    </div>
                    <div class="card-body pt-0">
                         <div class="nav-wrapper">
                              <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-icons-text" role="tablist">
                                   <li class="nav-item">
                                        <a class="nav-link active" id="tabs-total_bonus-tab" data-toggle="tab" href="#tabs-total_bonus" role="tab" aria-controls="tabs-total_bonus" aria-selected="true"><i class="fas fa-fw fa-chart-bar"></i>Total Bonus Agen</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" id="tabs-history_bonus-tab" data-toggle="tab" href="#tabs-history_bonus" role="tab" aria-controls="tabs-history_bonus" aria-selected="false"><i class="fas fa-fw fa-bell"></i>History Bonus Agen</a>
                                   </li>
                              </ul>
                         </div>
                         <br>
                         <br>
                         <div class="card shadow">
                              <div class="card-body">
                                   <div class="tab-content" id="bonusListContent">
                                        <div class="tab-pane fade show active" id="tabs-total_bonus" role="tabpanel" aria-labelledby="tabs-total_bonus-tab">
                                             <div class="table-container">
                                                  <table class="table align-items-center table-flush" id="list_table_total_bonus">
                                                       <thead class="bg-success">
                                                            <tr role="row" class="heading" style="color: white !important;">
                                                                 <th scope="col" style="width: 10px">#</th>
                                                                 <th scope="col" class="text-center">Username</th>
                                                                 <th scope="col">Nama</th>
                                                                 <th scope="col" class="text-center">Jumlah</th>
                                                                 <th scope="col" class="text-center">Proses</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody class="list">
                                                       <?php $i = 1; ?>
                                                            <?php foreach ($bc_komisi as $row) : ?>
                                                                 <tr>
                                                                      <td><?= $i; ?></td>
                                                                      <td><?= $row['username']; ?></td>
                                                                      <td><?= $row['nama']; ?></td>
                                                                      <td><?= $row['jumlah']; ?></td>
                                                                      <td></td>
                                                                 </tr>
                                                                 <?php $i++; ?>
                                                            <?php endforeach; ?>
                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-history_bonus" role="tabpanel" aria-labelledby="tabs-history_bonus-tab">
                                             <div class="table-container">
                                                  <table class="table align-items-center table-flush" id="list_table">
                                                       <thead class="bg-success">
                                                            <tr role="row" class="heading" style="color: white !important;">
                                                                 <th scope="col" style="width: 10px">#</th>
                                                                 <th scope="col" class="text-center">Tanggal</th>
                                                                 <th scope="col" class="text-center">Username</th>
                                                                 <th scope="col">Nama</th>
                                                                 <th scope="col" class="text-center">Nominal</th>
                                                                 <th scope="col" class="text-center">Pajak</th>
                                                                 <th scope="col" class="text-center">Nominal Diterima</th>
                                                                 <th scope="col" class="text-center">Tipe</th>
                                                                 <th scope="col" class="text-center">Keterangan</th>
                                                                 <th scope="col" class="text-center">Proses</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody class="list">
                                                            <?php $i = 1; ?>
                                                            <?php foreach ($agen as $row) : ?>
                                                                 <tr>
                                                                      <td><?= $i; ?></td>
                                                                      <td><?= $row['username']; ?></td>
                                                                      <td><?= $row['nama']; ?></td>
                                                                      <td><?= $row['jumlah']; ?></td>
                                                                      <td></td>
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
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- END CONTENT -->

