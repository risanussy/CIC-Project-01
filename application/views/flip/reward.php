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
                    <h3 class="mb-0">Reward </h3>
               </div>
          </div>
     </div>
     <br>
     <br>
     <div class="table-container">
          <table class="table align-items-center table-flush" id="list_table_reward" data-url="https://demo4.cic-webpro.com/member/rewardlistdata">
               <thead class="bg-success">
                    <tr role="row" class="heading" style="color:white !important;">
                         <th scope="col" style="width: 10px">#</th>
                         <th scope="col" class="text-center">Tanggal</th>
                         <th scope="col" class="text-center">Username</th>
                         <th scope="col">Nama</th>
                         <th scope="col" class="text-center">Reward</th>
                         <th scope="col" class="text-center">Nominal</th>
                         <th scope="col" class="text-center">Status</th>
                         <th scope="col" class="text-center">Tanggal Konfirmasi</th>
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
                         <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                         <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                         <td>
                         <select name="search_reward" class="form-control form-control-sm form-filter">
                              <option value="">Pilih...</option>
                              <option value="2">Cash</option><option value="1">Proteksi 1 Tahun</option><option value="3">Handphone</option><option value="4">Motor</option>                        </select>
                         </td>
                         <td>
                         <div class="mb-1">
                              <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_min" placeholder="Min" />
                         </div>
                         <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_max" placeholder="Max" />
                         </td>
                         <td>
                         <select name="search_status" class="form-control form-control-sm form-filter">
                              <option value="">Pilih...</option>
                              <option value="pending">PENDING</option>
                              <option value="confirmed">CONFIRMED</option>
                         </select>
                         </td>
                         <td>
                         <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                              <input type="text" class="form-control form-control-sm form-filter" readonly name="search_dateconfirm_min" placeholder="From" />
                              <span class="input-group-btn">
                                   <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                              </span>
                         </div>
                         <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                              <input type="text" class="form-control form-control-sm form-filter" readonly name="search_dateconfirm_max" placeholder="To" />
                              <span class="input-group-btn">
                                   <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                              </span>
                         </div>
                         </td>
                         <td style="text-align: center;">
                              <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                              <button class="btn btn-sm btn-outline-success btn-tooltip filter-cancel" title="Delet"><i class="fa-solid fa-trash-can"></i></button>
                         </td>
                    </tr>
               </thead>
               <tbody class="list">
                    <!-- Data Will Be Placed Here -->
               </tbody>
          </table>
     </div>
     </div>        </div>
     </div>
     </div>    <!-- END CONTENT -->