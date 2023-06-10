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
                              <h3 class="mb-0">Bonus Owner </h3>
                         </div>
                         </div>
                    </div>
                    <br>
                    <br>
                    <div class="card-body pt-0">
                    <div class="table-container">
                    <table class="table align-items-center table-flush" id="list_table_bonus_owner" data-url="https://demo4.cic-webpro.com/member/bonusownerlistdata">
                         <thead class="bg-success">
                              <tr role="row" class="heading" style="color:white !important;">
                                   <th scope="col" style="width: 10px">#</th>
                                   <th scope="col" class="text-center">Bulan</th>
                                   <th scope="col" class="text-center">Username</th>
                                   <th scope="col" class="text-center">Total Bonus</th>
                                   <th scope="col" class="text-center">Owner 1</th>
                                   <th scope="col" class="text-center">Owner 2</th>
                                   <th scope="col" class="text-center">Owner 3</th>
                                   <th scope="col" class="text-center">Owner 4</th>
                                   <th scope="col" class="text-center">Owner 5</th>
                                   <th scope="col" class="text-center">Proses</th>
                              </tr>

                              <tr role="row" class="filter" style="background-color: #f6f9fc">
                                   <td></td>
                                   <td>
                                        <div class="input-group input-group-sm date date-picker-month mb-1" data-date-format="yyyy-mm">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datemonth_min" placeholder="From" />
                                        <span class="input-group-btn">
                                             <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                                        </span>
                                        </div>
                                        <div class="input-group input-group-sm date date-picker-month" data-date-format="yyyy-mm">
                                        <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datemonth_max" placeholder="To" />
                                        <span class="input-group-btn">
                                             <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                                        </span>
                                        </div>
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter" name="search_username" placeholder="Cari Usename" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter" name="search_name" placeholder="Cari Nama" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_total_bonus_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_total_bonus_max" placeholder="Max" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_1_min" placeholder="Min" />
                                        </div>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_1_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_1_max" placeholder="Max" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_2_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_2_max" placeholder="Max" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_3_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_3_max" placeholder="Max" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_4_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_4_max" placeholder="Max" />
                                   </td>
                                   <td>
                                        <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_5_min" placeholder="Min" />
                                        </div>
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_owner_5_max" placeholder="Max" />
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
                                        <td>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Edit"><i class="fa-solid fa-calendar"></i>03-2023</button></td>
                                        </td>
                                        <td>AGEN Q NOL DUA</td> 
                                        <td>63.050</td>
                                        <td>12.610</td>
                                        <td>12.610</td>
                                        <td>12.610</td>
                                        <td>12.610</td>
                                        <td>12.610</td>
                              </tr>
                         </tbody>
                    </table>
                         </div>                
                    </div>
               </div>
          </div>
     </div>
     </div>    <!-- END CONTENT -->