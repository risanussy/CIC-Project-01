<div class="container-fluid mt--20 p-0 header pl-4 pr-4" style="height: 150px; background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%">
    <div class="row">
        <div class="col-xl-6 col-md-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Saldo Flip</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                                <i class="p-3 fas fa-coins"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-4 mb-3">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Topup</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
                                <i class="p-3 fas fa-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 p-1">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Transfer WD (Done)</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape text-white rounded-circle shadow" style="background: linear-gradient(45deg, #ff00ff, #00ffff);">
                                <i class="p-3 fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 p-1">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Fee Transfer (Done)</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow" style="background: linear-gradient(45deg, #ff00ff, #00ffff);">
                                <i class="p-3 fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 p-1">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Transfer WD (Pending)</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow" style="background: linear-gradient(45deg, #ff00ff, #00ffff);">
                                <i class="p-3 fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 p-1">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Fee Transfer (Pending)</h5>
                            <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp 0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow" style="background: linear-gradient(45deg, #ff00ff, #00ffff);">
                                <i class="p-3 fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-dark">Transaksi</h3>
                        </div>
                    </div>
                </div>
                <div class="table-container" style="overflow-x:scroll">
                    <table class="table align-items-center table-flush" id="list_table_flip_trx" data-url="https://demo4.cic-webpro.com/flip/fliptrxlistdata">
                        <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
                            <tr role="row" class="heading">
                                <th scope="col" style="width: 10px; color: white;">#</th>
                                <th scope="col" class="text-center text-light">Tanggal Transfer</th>
                                <th scope="col" class="text-center text-light">Tanggal WD</th>
                                <th scope="col" class="text-center text-light">Flip ID</th>
                                <th scope="col" class="text-center text-light">Username</th>
                                <th scope="col" class="text-center text-light">Bank</th>
                                <th scope="col" class="text-center text-light">Nominal</th>
                                <th scope="col" class="text-center text-light">Status</th>
                                <th scope="col" class="text-center text-light">Bukti Transfer</th>
                                <th scope="col" class="text-center text-light">Proses</th>
                            </tr>
                            <tr role="row" class="filter" style="background-color: #f6f9fc">
                                <td></td>
                                <td class="px-1">
                                    <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-1">
                                    <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datewd_min" placeholder="From" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datewd_max" placeholder="To" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button"><i class="fas fa-calendar-day text-primary"></i></button>
                                        </span>
                                    </div>
                                </td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_flip_id" /></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                                <td class="px-1">
                                    <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter" name="search_bank" placeholder="Bank" />
                                    </div>
                                    <input type="text" class="form-control form-control-sm form-filter" name="search_bill" placeholder="No. Rekening" />
                                </td>
                                <td class="px-1">
                                    <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_min" placeholder="Min" />
                                    </div>
                                    <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_max" placeholder="Max" />
                                </td>
                                <td class="px-1">
                                    <select name="search_status" class="form-control form-filter">
                                        <option value="">Status...</option>
                                        <option value="done">DONE</option>
                                        <option value="pending">PENDING</option>
                                        <option value="cancelled">CANCELLED</option>
                                    </select>
                                </td>
                                <td></td>
                                <td style="text-align: center;">
                                    <button class="btn btn-sm btn-info btn-block filter-submit" id="btn_list_table_flip_trx"><i class="fa fa-search"></i></button>
                                    <button class="btn btn-sm btn-warning btn-block filter-cancel"><i class="fa fa-times"></i></button>
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
</div>
