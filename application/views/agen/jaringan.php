<div class="container-fluid mt--6" style="overflow-x:scroll">
  <div class="row mt-5">
    <div class="col">
      <div class="card"  style="width: 2000px">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0 text-dark">List Generasi Agen</h3>
            </div>
          </div>
        </div>
        <div class="table-container">
          <table class="table align-items-center table-flush" id="list">
            <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
              <tr role="row" class="heading">
                <th scope="col" style="width: 100px; color: white">#</th>
                <th scope="col" class="text-center text-light" style="width: 400px">Username</th>
                <th scope="col" class="text-center text-light" style="width: 400px">Nama</th>
                <th scope="col" class="text-center text-light" style="width: 400px">Sponsor</th>
                <th scope="col" class="text-center text-light" style="width: 300px">Peringkat</th>
                <th scope="col" class="text-center text-light" style="width: 400px">Generasi</th>
                <th scope="col" class="text-center text-light" style="width: 300px">Group</th>
                <th scope="col" class="text-center text-light" style="width: 200px">Tanggal Daftar</th>
                <th scope="col" class="text-center text-light" style="width: 300px">Proses</th>
              </tr>
              <tr role="row" class="filter" style="background-color: #f6f9fc">
                <td>1.</td>
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
                  <input type="text" class="form-control form-control-sm form-filter" name="generasi" />
                </td>
                <td>
                  <select name="search_type" class="form-control form-control-sm form-filter">
                    <option value="">Pilih...</option>
                    <option value="2">Member</option>
                    <option value="3">Stockist</option>
                  </select>
                </td>
                <td>
                  <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                    </span>
                  </div>
                  <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                    <span class="input-group-btn">
                      <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                    </span>
                  </div>
                </td>
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-submit" id="btn_list" title="Search"><i class="fa fa-search"></i></button>
                  <button class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel" title="Reset"><i class="fa fa-times"></i></button>
                </td>
              </tr>
            </thead>
            <tbody>
            <th>
                <td>1.</td>
                <td>anj</td>
                <td>anj</td>
                <td>anj</td>
                <td>anj</td>
                <td>anj</td>
                <td>anj</td>
                <td>anj</td>
            </th>
            <!-- Data akan ditempatkan di sini -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

