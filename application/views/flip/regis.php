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
                         <table class="table align-items-center table-flush" id="list_table">
                              <thead class="thead-primary"
                                   style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
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
                              <thead>
                                   <tr role="row" class="filter" style="background-color: #f6f9fc">
                                        <td></td>
                                        <td><input type="text" class="form-control form-control-sm form-filter"
                                                  name="search_member" /></td>
                                        <td><input type="text" class="form-control form-control-sm form-filter"
                                                  name="search_sponsor" /></td>
                                        <td><input type="text" class="form-control form-control-sm form-filter"
                                                  name="search_username" /></td>
                                        <td><input type="text" class="form-control form-control-sm form-filter"
                                                  name="search_name" /></td>
                                        <td>
                                             <div class="mb-1">
                                                  <input type="text"
                                                       class="form-control form-control-sm form-filter text-center numbermask"
                                                       name="search_bv_min" placeholder="Min" />
                                             </div>
                                             <input type="text"
                                                  class="form-control form-control-sm form-filter text-center numbermask"
                                                  name="search_bv_max" placeholder="Max" />
                                        </td>
                                        <td>
                                             <div class="mb-1">
                                                  <input type="text"
                                                       class="form-control form-control-sm form-filter text-center numbermask"
                                                       name="search_omzet_min" placeholder="Min" />
                                             </div>
                                             <input type="text"
                                                  class="form-control form-control-sm form-filter text-center numbermask"
                                                  name="search_omzet_max" placeholder="Max" />
                                        </td>

                                        <td>
                                             <select name="search_status"
                                                  class="form-control form-control-sm form-filter">
                                                  <option value="">Pilih...</option>
                                                  <option value="pending">PENDING</option>
                                                  <option value="confirmed">CONFIRMED</option>
                                                  <option value="cancelled">CANCELLED</option>
                                             </select>
                                        </td>
                                        <td>
                                             <select name="search_access" class="form-control form-filter input-sm">
                                                  <option value="">Pilih...</option>
                                                  <option value="admin">ADMIN</option>
                                                  <option value="member">MEMBER</option>
                                                  <option value="ewallet">EWALLET</option>
                                                  <option value="referral">REFERRAL</option>
                                                  <option value="shop">SHOP</option>
                                             </select>
                                        </td>
                                        <td>
                                             <div class="input-group input-group-sm date date-picker mb-1"
                                                  data-date-format="yyyy-mm-dd">
                                                  <input type="text" class="form-control form-control-sm form-filter"
                                                       readonly name="search_datecreated_min" placeholder="From" />
                                                  <span class="input-group-btn">
                                                       <button class="btn btn-sm btn-white btn-flat" type="button"><i
                                                                 class="ni ni-calendar-grid-58 text-primary"></i></button>
                                                  </span>
                                             </div>
                                             <div class="input-group input-group-sm date date-picker"
                                                  data-date-format="yyyy-mm-dd">
                                                  <input type="text" class="form-control form-control-sm form-filter"
                                                       readonly name="search_datecreated_max" placeholder="To" />
                                                  <span class="input-group-btn">
                                                       <button class="btn btn-sm btn-white btn-flat" type="button"><i
                                                                 class="ni ni-calendar-grid-58 text-primary"></i></button>
                                                  </span>
                                             </div>
                                        </td>
                                        <td>
                                             <div class="input-group input-group-sm date date-picker mb-1"
                                                  data-date-format="yyyy-mm-dd">
                                                  <input type="text" class="form-control form-control-sm form-filter"
                                                       readonly name="search_dateconfirm_min" placeholder="From" />
                                                  <span class="input-group-btn">
                                                       <button class="btn btn-sm btn-white btn-flat" type="button"><i
                                                                 class="ni ni-calendar-grid-58 text-primary"></i></button>
                                                  </span>
                                             </div>
                                             <div class="input-group input-group-sm date date-picker"
                                                  data-date-format="yyyy-mm-dd">
                                                  <input type="text" class="form-control form-control-sm form-filter"
                                                       readonly name="search_dateconfirm_max" placeholder="To" />
                                                  <span class="input-group-btn">
                                                       <button class="btn btn-sm btn-white btn-flat" type="button"><i
                                                                 class="ni ni-calendar-grid-58 text-primary"></i></button>
                                                  </span>
                                             </div>
                                        </td>
                                        <td style="text-align: center;">
                                             <button
                                                  class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-submit"
                                                  id="btn_list_table" title="Search"><i
                                                       class="fa fa-search"></i></button>
                                             <button
                                                  class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel"
                                                  title="Reset"><i class="fa fa-times"></i></button>
                                        </td>
                                   </tr>
                              <tfoot>
                                   <tbody class="list">
                                        <!-- Data Will Be Placed Here -->
                                   </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>