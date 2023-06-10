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
                              <h3 class="mb-0">Wallet </h3>
                         </div>
                         </div>
                    </div>
                    <div class="card-body pt-0">
                         <div class="nav-wrapper">
                         <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-icons-text" role="tablist">
                              <li class="nav-item">
                                   <a class="nav-link active" id="tabs-total_wallet-tab" data-toggle="tab" href="#tabs-total_wallet" role="tab" aria-controls="tabs-total_wallet" aria-selected="true"><i class="fa-solid fa-chart-simple"></i>Wallet Member</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" id="tabs-history_wallet-tab" data-toggle="tab" href="#tabs-history_wallet" role="tab" aria-controls="tabs-history_wallet" aria-selected="false"><i class="fa-regular fa-bell"></i>History Wallet Member</a>
                              </li>
                         </ul>
                         </div>
                         <br>
                         <br>
                         <div class="card shadow">
                         <div class="card-body">
                              <div class="tab-content" id="bonusListContent">
                                   <div class="tab-pane fade show active" id="tabs-total_wallet" role="tabpanel" aria-labelledby="tabs-total_wallet-tab">
                                        <div class="table-container">
                                             <table class="table align-items-center table-flush" id="list_table_deposite" data-url="https://demo4.cic-webpro.com/commission/depositelistdata">
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
                                                            <td>oejoek001</td>
                                                            <td>Muhamad Idrus</td>
                                                            <td>421.950</td> 
                                                            <td><button style="background-color : green; border: none; color:white">Detail</button></td>
                                                  </tr>
                                             </tbody>
                                             </table>
                                        </div>
                                   </div>
                                   <div class="tab-pane fade" id="tabs-history_wallet" role="tabpanel" aria-labelledby="tabs-history_wallet-tab">
                                        <div class="table-container">
                                             <table class="table align-items-center table-flush" id="list_table_deposite_history" data-url="https://demo4.cic-webpro.com/commission/memberdepositelistdata/all/">
                                             <thead class="bg-success">
                                                  <tr role="row" class="heading" style="color:white !important;">
                                                       <th scope="col" style="width: 10px">#</th>
                                                       <th scope="col" class="text-center">Tanggal</th>
                                                       <th scope="col" class="text-center"></th>
                                                       <th scope="col" class="text-center">Tipe</th>
                                                       <th scope="col" class="text-center">Status</th>
                                                       <th scope="col" class="text-center">Nominal</th>
                                                       <th scope="col" class="text-center">Keterangan</th>
                                                       <th scope="col" class="text-center">Proses</th>
                                                  </tr>
                                                  <tr role="row" class="filter" style="background-color: #f6f9fc">
                                                       <td></td>
                                                       <td>
                                                            <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                                                 <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                                                                 <span class="input-group-btn">
                                                                 <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                                                                 </span>
                                                            </div>
                                                            <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                                                 <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                                                                 <span class="input-group-btn">
                                                                 <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                                                                 </span>
                                                            </div>
                                                       </td>
                                                       <td>
                                                            <div class="mb-2">
                                                                 <input type="text" class="form-control form-control-sm form-filter " name="search_username" placeholder="Username" />
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm form-filter " name="search_name" placeholder="Name" />
                                                       </td>
                                                       <td>
                                                            <select name="search_source" class="form-control form-filter input-sm">
                                                                 <option value="">Tipe...</option>
                                                                 <option value="bonus">BONUS</option>
                                                                 <option value="withdraw">WITHDRAW</option>
                                                                 <option value="register">REGISTER</option>
                                                            </select>
                                                       </td>
                                                       <td>
                                                            <select name="search_status" class="form-control form-filter input-sm">
                                                                 <option value="">Status...</option>
                                                                 <option value="IN">IN</option>
                                                                 <option value="OUT">OUT</option>
                                                            </select>
                                                       </td>
                                                       <td>
                                                            <div class="mb-1">
                                                                 <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_min" placeholder="Min" />
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_max" placeholder="Max" />
                                                       </td>
                                                       <td><input type="text" class="form-control form-filter input-sm" name="search_desc" /></td>
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
                                                            <td>2023-03-29 @17:52</td>
                                                            <td>AGEN Q NOL SATU</td>
                                                            <td>Rahmat Tullah</td>
                                                            <td><button style="background-color : green; border: none; color:white">Bonus</button></td>
                                                            <td><button style="background-color : green; border: none; color:white">In</button></td>
                                                            <td>29.100</td>
                                                            <td>Bonus Referal Gen-2 dari Omset Register Member agungberkah01</td>
                                                  </tr>
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
     </div>    <!-- END CONTENT -->
