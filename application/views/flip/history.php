<div class="container-fluid mt--6">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-dark">History Pembayaran Flip </h3>
                        </div>
                    </div>
                </div>
                <div class="table-container" style="overflow-x:scroll;">
                    <table class="table align-items-center table-flush" id="list_table_flip_accept_payment" data-url="https://demo4.cic-webpro.com/flip/flippaymentlistdata">
                        <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
                            <tr role="row" class="heading">
                                <th scope="col" rowspan="2" style="width: 10px; color: white;">#</th>
                                <th scope="col" rowspan="2" class="text-center text-light">No. Invoice</th>
                                <th scope="col" rowspan="2" class="text-center text-light">ID Transaksi</th>
                                <th scope="col" colspan="5" class="text-center text-light">Bill Payment</th>
                                <th scope="col" rowspan="2" class="text-center text-light">Status</th>
                                <th scope="col" rowspan="2" class="text-center text-light">Tanggal</th>
                                <th scope="col" rowspan="2" class="text-center text-light">Proses</th>
                            </tr>
                            <tr>
                                <th class="text-light">Nominal</th>
                                <th class="text-light">Tipe Bank Pengirim</th>
                                <th class="text-light">Bank Pengirim</th>
                                <th class="text-light">No. Virtual</th>
                                <th class="text-light">Nama Pengirim</th>
                            </tr>
                            <tr role="row" class="filter" style="background-color: #f6f9fc">
                                <td></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_invoice" /></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_transaction_id" /></td>
                                <td class="px-1">
                                    <div class="mb-1">
                                        <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_min" placeholder="Min" />
                                    </div>
                                    <input type="text" class="form-control form-control-sm form-filter text-center numbermask" name="search_nominal_max" placeholder="Max" />
                                </td>
                                <td></td>
                                <td>
                                    <select name="search_bank" class="form-control form-control-sm form-filter" id="search_bank">
                                        <option value="">--Pilih Bank--</option>
                                        <option value="mandiri">Bank Mandiri</option>
                                        <option value="danamon">Bank Danamon</option>
                                        <option value="cimb">Bank CIMB Niaga</option>
                                        <option value="maybank">Maybank</option>
                                        <option value="sinarmas">Bank Sinarmas</option>
                                        <option value="bni">Bank BNI</option>
                                        <option value="bri">Bank BRI</option>
                                        <option value="permata">Bank Permata</option>
                                    </select>
                                </td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_virtual_number" /></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_holder_name" /></td>
                                <td class="px-1">
                                    <select name="search_status" id="search_status" class="form-control form-filter">
                                        <option value="">--Pilih Status--</option>
                                        <option value="NOT_CONFIRMED">Not Confirmed</option>
                                        <option value="PENDING">Pending</option>
                                        <option value="PROCESSED">Processed</option>
                                        <option value="CANCELED">Cancelled</option>
                                        <option value="FAILED">Failed</option>
                                        <option value="DONE">Done</option>
                                    </select>
                                </td>
                                <td class="px-1">
                                    <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datecreated_min" placeholder="From" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button">
                                                <i class="fas fa-calendar-day text-primary"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                                        <input type="text" class="form-control input-sm form-filter" readonly name="search_datecreated_max" placeholder="To" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-white btn-flat bg-light shadow" type="button">
                                                <i class="fas fa-calendar-day text-primary"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-sm btn-info btn-block filter-submit" id="btn_list_table_flip_accept_payment">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-block filter-cancel">
                                        <i class="fas fa-times"></i>
                                    </button>
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
