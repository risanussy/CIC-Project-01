     <!-- BEGIN CONTENT -->
     
     <div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
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
                    <h3 class="mb-0">Personal Sales Agent</h3>
               </div>
          </div>
     </div>
     <div class="card-body">
          <div class="nav-wrapper">
               <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                         <a class="nav-link active" id="tabs-total_omzet-tab" data-toggle="tab" href="#tabs-total_omzet" role="tab" aria-controls="tabs-total_omzet" aria-selected="true">Total Personal Sales Agent</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" id="tabs-history_omzet-tab" data-toggle="tab" href="#tabs-history_omzet" role="tab" aria-controls="tabs-history_omzet" aria-selected="false">Personal Sales terbaru</a>
                    </li>
               </ul>
          </div>
     </div>
     <br>
     <br>
     <div class="tab-content" id="bonusListContent">
          <div class="tab-pane fade show active" id="tabs-total_omzet" role="tabpanel" aria-labelledby="tabs-total_omzet-tab">
               <div class="table-container">
                    <table class="table align-items-center table-flush" id="list_personal_omzet_total">
                         <thead class="bg-success">
                         <tr role="row" class="heading" style="color:white !important;">
                              <th scope="col" style="width: 10px">#</th>
                              <th scope="col" class="text-center">Username</th>
                              <th scope="col" class="text-center" width="10%">Jumlah</th>
                              <th scope="col" class="text-center" width="10%">Total Omset</th>
                              <th scope="col" class="text-center" width="10%">Proses</th>
                         </tr>
                         <tr role="row" class="filter" style="background-color: #f6f9fc">
                              <td></td>
                              <td>
                                   <input type="text" class="form-control form-control-sm form-filter" name="search_username" />
                              </td>
                              <td>
                                   <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_qty_min" placeholder="Min" />
                                   </div>
                                   <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_qty_max" placeholder="Max" />
                              </td>
                              <td>
                                   <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_omzet_min" placeholder="Min" />
                                   </div>
                                   <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_omzet_max" placeholder="Max" />
                              </td>
                              <td style="text-align: center;">
                                   <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" id="btn_reset_list_personal_omzet_total" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                   <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" id="btn_reset_list_personal_omzet_total" title="Delet"><i class="fa-solid fa-trash-can"></i></button>
                              </td>
                         </tr>
                         </thead>
                         <tbody class="list">
                              <!-- Data Will Be Placed Here -->
                              <tr>                         
                                        <td>1.</td>
                                        <td>stalloneliau</td>
                                        <td>3 Pcs</td>
                                        <td>Rp 389.000</td> 
                                        <td>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Detail">Detail</button>
                                        </td> 
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
          <div class="tab-pane fade" id="tabs-history_omzet" role="tabpanel" aria-labelledby="tabs-history_omzet-tab">
               <div class="table-container">
                    <table class="table align-items-center table-flush" id="list_personal_omzet">
                         <thead class="bg-success">
                         <tr role="row" class="heading" style="color:white !important;">
                              <th scope="col" style="width: 10px">#</th>
                              <th scope="col" class="text-center">Username</th>
                              <th scope="col" class="text-center">Tipe</th>
                              <th scope="col" class="text-center">Jumlah</th>
                              <th scope="col" class="text-center">Omset</th>
                              <th scope="col" class="text-center">Keterangan</th>
                              <th scope="col" class="text-center">Tanggal</th>
                              <th scope="col" class="text-center">Proses</th>
                         </tr>
                         </thead>
                         <tbody class="list">
                              <!-- Data Will Be Placed Here -->
                              <tr>                         
                                        <td>1.</td>
                                        <td>agungberkah01</td>
                                        <td>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Perdana">Perdana</button>
                                        </td> 
                                        <td>3 Pcs</td>
                                        <td>Rp 389.000</td> 
                                        <td>Omzet Registrasi Perdana (INV/00001078)</td>
                                        <td>2023-03-29</td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>


     </div>        </div>
     </div>
     </div>    <!-- END CONTENT -->