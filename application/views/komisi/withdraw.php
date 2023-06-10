     <!-- BEGIN CONTENT -->
     
     
     <div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
               </div>
               <div class="row">
                    <div class="col-xl-4 col-md-6">
                         <div class="card">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Withdraw</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>
                                   </div>
                                   <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow" syle="padding: 20px !important">
                                             <i class="fa-solid fa-chart-simple"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                         <div class="card">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Transfer WD</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>
                                   </div>
                                   <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                                             <i class="fa-solid fa-arrow-rotate-right"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         </div>
                    </div>
                         <div class="col-xl-4 col-md-6">
                         <div class="card">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col">
                                             <h5 class="card-title text-uppercase text-muted mb-0">Total Bonus</h5>
                                             <span class="h2 font-weight-bold mb-0">1.430.750</span>
                                        </div>
                                        <div class="col-auto">
                                             <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                             <i class="fa-solid fa-file-invoice-dollar"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         </div>
                    </div>
          </div>
     </div>
     </div>
     <br>
     <br>

     <div class="container-fluid mt--6">
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header border-0">
                         <div class="row align-items-center">
                         <div class="col">
                              <h3 class="mb-0">Withdraw </h3>
                         </div>
                         </div>
                    </div>
                    <div class="card-body pt-0">
                         <div class="table-container">
     <table class="table align-items-center table-flush" id="list_table_withdraw" data-url="https://demo4.cic-webpro.com/commission/withdrawlistdata">
          <thead class="bg-success">
               <tr role="row" class="heading" style="color:white !important;">
                    <th scope="col" style="width: 10px">#</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col" class="text-center">Bank</th>
                    <th scope="col" class="text-center">Rekening</th>
                    <th scope="col" class="text-center">Nominal</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Keterangan</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Tanggal Konfirmasi</th>
                    <th scope="col" class="text-center">Proses</th>
               </tr>
               <tr role="row" class="filter" style="background-color: #f6f9fc">
                    <td></td>
                    <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                    <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                    <td>
                         <select class="form-control form-control-sm form-filter" name="search_bank">
                         <option value="">Pilih...</option>
                         <option value="3">002 - BRI</option><option value="4">008 - Mandiri</option><option value="2">009 - BNI</option><option value="12">011 - Danamon</option><option value="11">013 - Permata Bank</option><option value="1">014 - BCA</option><option value="13">016 - BII Maybank</option><option value="48">019 - Panin</option><option value="7">022 - CIMB Niaga Syariah</option><option value="6">022 - CIMB Niaga</option><option value="19">026 - Lippo</option><option value="16">028 - OCBC NISP</option><option value="20">031 - Citibank</option><option value="54">037 - Artha Graha International</option><option value="49">046 - DBS Indonesia</option><option value="22">110 - Bank Jabar Banten (BJB)</option><option value="23">111 - Bank DKI</option><option value="24">112 - BPD DIY</option><option value="25">113 - Bank Jateng</option><option value="26">114 - Bank Jatim</option><option value="27">115 - BPD Jambi</option><option value="28">116 - BPD Aceh</option><option value="29">117 - Bank Sumut</option><option value="30">118 - Bank Nagari (Bank Sumbar)</option><option value="31">119 - Bank Riau Kepri</option><option value="32">120 - Bank Sumsel Babel</option><option value="33">121 - Bank Lampung</option><option value="34">122 - BPD Kalsel</option><option value="35">123 - BPD Kalimantan Barat</option><option value="36">124 - BPD Kaltim</option><option value="37">125 - BPD Kalteng</option><option value="38">126 - BPD Sulselbar</option><option value="39">127 - Bank Sulut</option><option value="40">128 - BPD NTB</option><option value="41">129 - BPD Bali</option><option value="42">130 - Bank NTT</option><option value="43">131 - Bank Maluku</option><option value="44">132 - BPD Papua</option><option value="45">133 - Bank Bengkulu</option><option value="46">134 - BPD Sulawesi Tengah</option><option value="47">135 - Bank Sultra</option><option value="8">147 - Muamalat</option><option value="15">153 - Sinarmas</option><option value="10">200 - BTN</option><option value="21">213 - BTPN</option><option value="9">422 - BRI Syariah</option><option value="51">425 - Bank BJB Syariah</option><option value="14">426 - Mega</option><option value="52">427 - BNI Syariah</option><option value="17">441 - Bukopin</option><option value="5">451 - Syariah Mandiri</option><option value="53">503 - Bank National Nobu (BANK ALFINDO)</option><option value="18">536 - BCA Syariah</option><option value="50">566 - Bank Victoria</option>                    </select>
                    </td>
                    <td>
                         <div class="bottom5">
                         <input type="text" class="form-control form-control-sm form-filter numbermask" name="search_bill" placeholder="No. Rekening" />
                         </div>
                         <input type="text" class="form-control form-control-sm form-filter" name="search_bill_name" placeholder="Pemilik Rekening" />
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
                         <option value="transfered">TRANSFERED</option>
                         </select>
                    </td>
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
                         <div class="input-group input-group-sm date date-picker mb-1" data-date-format="yyyy-mm-dd">
                         <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datemodified_min" placeholder="From" />
                         <span class="input-group-btn">
                              <button class="btn btn-sm btn-white btn-flat shadow" type="button"><i class="fa-solid fa-calendar-days" style="color:green"></i></button>
                         </span>
                         </div>
                         <div class="input-group input-group-sm date date-picker" data-date-format="yyyy-mm-dd">
                         <input type="text" class="form-control form-control-sm form-filter" readonly name="search_datemodified_max" placeholder="To" />
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
     </div>                </div>
               </div>
          </div>
     </div>
     </div>    <!-- END CONTENT -->