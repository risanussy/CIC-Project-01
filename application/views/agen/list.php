<div class="container-fluid mt--6" style="overflow-x:scroll">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">List Agen</h3>
            </div>
          </div>
        </div>
        <div class="table-container">
          <table class="table align-items-center table-flush" id="list">
            <thead class="thead-light">
              <tr role="row" class="heading">
                <th scope="col" style="width: 10px">#</th>
                <th scope="col" class="text-center">Username</th>
                <th scope="col">Nama</th>
                <th scope="col" class="text-center">Sponsor</th>
                <th scope="col" class="text-center">Peringkat</th>
                <th scope="col" class="text-center">Kontak</th>
                <th scope="col" class="text-center">Tipe</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Tanggal Daftar</th>
                <th scope="col" class="text-center">Terakhir Login</th>
                <th scope="col" class="text-center">Username</th>
                <th scope="col" class="text-center">Proses</th>
              </tr>
              <tr role="row" class="filter" style="background-color: #f6f9fc">
                <td></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                <td><input type="text" class="form-control form-control-sm form-filter" name="search_sponsor" /></td>
                <td>
                  <select name="search_package" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="agent">Agen</option>
                    <option value="basic">Agen Pemula</option>
                    <option value="senior">Agen Senior</option>
                    <option value="executive">Agen Eksekutif</option>
                  </select>
                </td>
                <td>
                  <div class="mb-2">
                    <input type="text" class="form-control form-control-sm form-filter" name="search_phone" placeholder="Search Phone" />
                  </div>
                  <input type="text" class="form-control form-control-sm form-filter" name="search_email" placeholder="Search Email" />
                </td>
                <td>
                  <select name="search_type" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="2">Member</option>
                    <option value="3">Stockist</option>
                  </select>
                </td>
                <td>
                  <select name="search_status" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="1">Active</option>
                    <option value="2">Blacklist</option>
                  </select>
                </td>
                <td>
                  <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                    </span>
                  </div>
                  <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat" type="button"><i class="ni ni-calendar-grid-58 text-primary"></i></button>
                    </span>
                  </div>
                </td>
                <td></td>
                <td><input type="text" class="form-control form-control-sm form-filter" /></td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-block btn-outline-default btn-tooltip filter-submit" id="btn_list" title="Search"><i class="fa fa-search"></i></button>
                  <button class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel" title="Reset"><i class="fa fa-times"></i></button>
                </td>
              </tr>
            </thead>
            <tbody class="list">
              <!-- Data Will Be Placed Here -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- BEGIN CONFIRMATION MODAL -->
<div class="modal fade" id="modal_select_stockist" tabindex="-1" role="basic" aria-hidden="true" data-url="https://demo4.cic-webpro.com/member/asstockist/">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Pilihan Stokis</h4>
      </div>
      <form role="form" method="post" action="https://demo4.cic-webpro.com/member/memberstatus" id="form-stockist" class="form-horizontal">
        <input type="hidden" name="asmember" id="asmember" class="d-none change-stockist" value="" />
        <div class="modal-body wrapper-form-stockist py-2">
          <div id="alert_form_stockist" class="alert display-hide"></div>
          <div class="form-group row mb-2">
            <label class="col-md-3 col-form-label form-control-label">Username <span class="required">*</span></label>
            <div class="col-md-8">
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                </div>
                <input type="text" class="form-control text-lowercase change-stockist change-stockist-username" disabled="" />
              </div>
            </div>
          </div>
          <div class="form-group row mb-2">
            <label class="col-md-3 col-form-label form-control-label">Nama <span class="required">*</span></label>
            <div class="col-md-8">
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control text-lowercase change-stockist change-stockist-name" disabled="" />
              </div>
            </div>
          </div>

          <!-- Status Member -->
          <div class="form-group row mb-2">
            <label class="col-md-3 col-form-label form-control-label">Status Anggota <span class="required">*</span></label>
            <div class="col-md-8">
              <select class="form-control" name="stockist_status" id="stockist_status">
                <option value="3">STOCKIST</option>
                <option value="2">AGEN</option>
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info" id="do_save_asstockist">Lanjut</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END CONFIRMATION MODAL -->
</div>
