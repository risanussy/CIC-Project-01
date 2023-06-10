     <!-- BEGIN CONTENT -->
     
     <div class="header bg-breadcrumb pb-6">
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
                    <div class="card-header bg-transparent border-0">
                         <div class="row align-items-center">
                         <div class="col">
                              <h3 class="text-dark mb-0">Statement Komisi (Summary)</h3>
                         </div>
                         </div>
                    </div>
                    
     <div class="card-body pt-0">
     <div class="form-group row mb-3" id="period_reward">
          <label class="col-md-2 col-lg-1 col-form-label form-control-label">Periode</label>
          <div class="col-md-10">
               <div class="row input-daterange datepicker align-items-center">
                    <div class="col col-md-4 col-lg-3">
                         <div class="input-group">
                         <input type="text" class="form-control text-center" readonly name="search_startdate" data-date-format="yyyy-mm-dd" placeholder="From" value="2023-05-01" />
                         <span class="input-group-btn">
                              <button type="button" class="btn btn-neutral shadow-lg" style="color:green"><i class="fa-regular fa-calendar-days"></i></button>
                         </span>
                         </div>
                    </div>
                    <div class="col-md-1 text-center">
                         <label>s/d</label>
                    </div>
                    <div class="col col-md-4 col-lg-3">
                         <div class="input-group">
                         <input type="text" class="form-control text-center" readonly name="search_enddate" data-date-format="yyyy-mm-dd" placeholder="To" value="2023-05-30" />
                         <span class="input-group-btn">
                              <button type="button" class="btn btn-neutral shadow-lg" style="color:green"><i class="fa-regular fa-calendar-days"></i></button>
                         </span>
                         </div>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                         <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel btn-lg" title="Set Periode">Set Periode</button>
                    </div>
               </div>
          </div>
     </div>
     </div>

     <div class="table-container">
     <table class="table align-items-center table-flush" id="list_table_total_commission" data-url="https://demo4.cic-webpro.com/commission/commissionlistdata">
          <thead class="bg-success">
               <tr role="row" class="heading"  style="color:white !important;">
                    <th scope="col" class="text-center text-" style="width: 10px">#</th>
                    <th scope="col" class=" text-center text-light" style="width: 1000px">Username</th>
                    <th scope="col" class="text-center text-light" style="width: 1000px">Nama</th>
                    <th scope="col" class=" text-center text-light" style="width: 1000px ">Jumlah</th>
                    <th scope="col" class=" text-center text-light" style="width: 1000px">Proses</th>
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
                         <button class="btn btn-sm btn-outline-success btn-tooltip filter-clear" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                         <button class="btn btn-sm btn-outline-success btn-tooltip filter-clear" title="Delet"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
               </tr>
          </thead>
          <tbody class="list">
               <!-- Data Will Be Placed Here -->
          </tbody>
     </table>
     </div>            </div>
          </div>
     </div>
     </div>    <!-- END CONTENT -->