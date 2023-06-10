     <!-- BEGIN CONTENT -->
     
     <div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-5">
                         <a href="#" class="btn btn-sm btn-neutral" style="background-color : green; border: none; color:white">Total Bonus : 1.430.750 </a>
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
                              <h3 class="mb-0">Komisi </h3>
                         </div>
                         </div>
                    </div>
                    <div class="card-body pt-0">
                         <div class="nav-wrapper">
     <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
               <a class="nav-link active" id="tabs-total_bonus-tab" data-toggle="tab" href="#tabs-total_bonus" role="tab" aria-controls="tabs-total_bonus" aria-selected="true"><i class="fa-solid fa-chart-simple"></i>Total Bonus Agen</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" id="tabs-history_bonus-tab" data-toggle="tab" href="#tabs-history_bonus" role="tab" aria-controls="tabs-history_bonus" aria-selected="false"><i class="fa-regular fa-bell"></i>History Bonus Agen</a>
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
                         <table class="table align-items-center table-flush" id="list_table_total_bonus" data-url="https://demo4.cic-webpro.com/commission/totalbonuslistdata">
                         <thead class="bg-success">
                              <tr role="row" class="heading" style="color:white !important;">
                                   <th scope="col" style="width: 10px">#</th>
                                   <th scope="col" class="text-center">Username</th>
                                   <th scope="col">Nama</th>
                                   <th scope="col" class="text-center">Jumlah</th>
                                   <th scope="col" class="text-center">Proses</th>
                              </tr>
                              <tr role="row" class="filter" style="background-color: #f6f9fc">
                                   <td></td>
                                   <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                                   <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                                   <td>
                                        <div class="mb-1">
                                             <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_max" placeholder="Max" />
                                   </td>
                                   <td style="text-align: center;">
                                        <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" title="Delet"><i class="fa-solid fa-trash-can"></i></button>
                                   </td>
                              </tr>
                         </thead>
                              <tbody class="list">
                                   <!-- Data Will Be Placed Here -->
                                   <tr>                         
                                             <td>1.</td>
                                             <td>agenq01</td>
                                             <td>AGEN Q NOL SATU</td>
                                             <td>475.300</td> 
                                             <td><button style="background-color : green; border: none; color:white; text-align:center">Detail</button></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="tab-pane fade" id="tabs-history_bonus" role="tabpanel" aria-labelledby="tabs-history_bonus-tab">
                    <div class="table-container">
                         <table class="table align-items-center table-flush" id="list_table_history_bonus" data-url="https://demo4.cic-webpro.com/commission/historybonuslistdata">
                         <thead class="bg-success">
                              <tr role="row" class="heading" style="color:white !important;">
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
                              <!-- Data Will Be Placed Here -->
                              <tr>                         
                                        <td>1.</td>
                                        <td>2023-03-29 @17:52</td>
                                        <td>rahmat01</td>
                                        <td>Rahmat Tullah</td>
                                        <td>70.000</td>
                                        <td>2.100</td>
                                        <td>67.900</td>
                                        <td><button style="background-color : green; border: none; color:white; font-size:13px; text-align:center">Bonus Sponsor</button></td>
                                        <td style="font-size:13px">Bonus Referal Gen-1 dari Omset Register Member agungberkah01</td>
                              </tr>
                         </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
     </div>                </div>
               </div>
          </div>
     </div>
     </div>    <!-- END CONTENT -->