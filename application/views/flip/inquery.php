<div class="container-fluid mt--6">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-dark">Transaksi Inquery</h3>
                        </div>
                    </div>
                </div>
                <div class="table-container" style="overflow-x:scroll">
                    <table class="table table-striped table-bordered table-advance table-hover" id="list_table_flip_inquiry" data-url="https://demo4.cic-webpro.com/flip/flipinquirylistdata">
                        <thead class="thead-primary" style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
                            <tr role="row" class="heading">
                                <th scope="col" style="width: 10px; color: white">#</th>
                                <th scope="col" class="text-center text-light">Tanggal</th>
                                <th scope="col" class="text-center text-light">Bank</th>
                                <th scope="col" class="text-center text-light">No. Rekening Bank</th>
                                <th scope="col" class="text-center text-light">Pemilik Rekening</th>
                                <th scope="col" class="text-center text-light">Status</th>
                                <th scope="col" class="text-center text-light">Proses</th>
                            </tr>
                            <tr role="row" class="filter" style="background-color: #f6f9fc">
                                <td></td>
                                <td class="px-1">
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
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_bank" /></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_bill" /></td>
                                <td class="px-1"><input type="text" class="form-control form-control-sm form-filter" name="search_bill_name" /></td>
                                <td class="px-1">
                                    <select name="search_status" class="form-control form-filter">
                                        <option value="">Status...</option>
                                        <option value="success">SUCCESS</option>
                                        <option value="pending">PENDING</option>
                                        <option value="invalid">INVALID</option>
                                    </select>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-sm btn-info btn-block filter-submit" id="btn_list_table_flip_inquiry" title="Search"><i class="fa fa-search"></i></button>
                                    <button class="btn btn-sm btn-warning btn-block filter-cancel" title="Reset"><i class="fa fa-times"></i></button>
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