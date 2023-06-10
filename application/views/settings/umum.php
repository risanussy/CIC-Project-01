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
                    <div class="card-body wrapper-setting-general">
                         <div class="accordion" id="accordionGeneralSetting">
                         <div class="card mb-2">
                              <div class="card-header py-3 bg-gradient-indigo" id="headCompanyInfo" data-toggle="collapse" data-target="#companyInfo" aria-expanded="false" aria-controls="companyInfo" style="background-color:green">
                                   <h5 class="text-white mb-0">Informasi Perusahaan</h5>
                              </div>
                              <br>
                              <br>
               <div id="companyInfo" class="collapse show" aria-labelledby="headCompanyInfo" data-parent="#accordionGeneralSetting">
                         <form role="form" method="post" action="https://demo4.cic-webpro.com/setting/updatecompany" id="form-setting-company" class="form-horizontal">
                              <div class="card-body wrapper-setting-company">
                                   <div class="form-group row mb-2">
                                        <label class="col-md-3 col-form-label form-control-label" for="company_name">Nama Perusahaan <span class="required">*</span></label>
                                        <div class="col-md-9">
                                             <div class="input-group input-group-merge input-group-alternative">
                                                  <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                                                  </div>
                                                  <input type="text" name="company_name" id="company_name" class="form-control" placeholder="" value="B-community">
                                             </div>
                                        </div>
                                   </div>
                              <!-- No. Telp/HP -->
                              <div class="form-group row mb-2">
                                   <label class="col-md-3 col-form-label form-control-label">No. HP/WA <span class="required">*</span></label>
                                   <div class="col-md-9">
                                        <div class="input-group input-group-merge">
                                             <div class="input-group-prepend">
                                             <span class="input-group-text">+62</span>
                                             </div>
                                             <input type="text" name="company_phone" id="company_phone" class="form-control numbermask phonenumber" placeholder="8xxxxxxxxx" value="0819628544" />
                                             <div class="input-group-append">
                                             <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                             </div>
                                        </div>
                                   </div>
                              </div>  

                    <!-- Email -->
                    <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Email <span class="required">*</span></label>
                         <div class="col-md-9">
                              <div class="input-group input-group-merge">
                                   <div class="input-group-prepend">
                                   <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                   </div>
                                   <input type="text" name="company_email" id="company_email" class="form-control text-lowercase" placeholder="Email" value="info@agenq.co.id"/>
                              </div>
                         </div>
                    </div>

                    <!-- Province -->
                    <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Provinsi <span class="required">*</span></label>
                         <div class="col-md-9">
                              <select class="form-control select_province" name="company_province" id="company_province" data-form="register" data-url="https://demo4.cic-webpro.com/address/selectprovince" data-toggle="select2">
                                   <option value="">Pilih Provinsi</option>
                                   <option value="1" >Bali</option><option value="2" >Bangka Belitung</option><option value="3" selected>Banten</option><option value="4" >Bengkulu</option><option value="5" >DI Yogyakarta</option><option value="6" >DKI Jakarta</option><option value="7" >Gorontalo</option><option value="8" >Jambi</option><option value="9" >Jawa Barat</option><option value="10" >Jawa Tengah</option><option value="11" >Jawa Timur</option><option value="12" >Kalimantan Barat</option><option value="13" >Kalimantan Selatan</option><option value="14" >Kalimantan Tengah</option><option value="15" >Kalimantan Timur</option><option value="16" >Kalimantan Utara</option><option value="17" >Kepulauan Riau</option><option value="18" >Lampung</option><option value="19" >Maluku</option><option value="20" >Maluku Utara</option><option value="21" >Nanggroe Aceh Darussalam (NAD)</option><option value="22" >Nusa Tenggara Barat (NTB)</option><option value="23" >Nusa Tenggara Timur (NTT)</option><option value="24" >Papua</option><option value="25" >Papua Barat</option><option value="26" >Riau</option><option value="27" >Sulawesi Barat</option><option value="28" >Sulawesi Selatan</option><option value="29" >Sulawesi Tengah</option><option value="30" >Sulawesi Tenggara</option><option value="31" >Sulawesi Utara</option><option value="32" >Sumatera Barat</option><option value="33" >Sumatera Selatan</option><option value="34" >Sumatera Utara</option> 
                              </select>
                         </div>
                    </div>   

                    <!-- City -->
                    <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Kabupaten/Kota <span class="required">*</span></label>
                         <div class="col-md-9">
                              <select class="form-control select_district" name="company_city" id="company_city" data-toggle="select2">
                                   <option value="">Pilih Kabupaten/Kota</option>
                                   <option value="106" >Kota Cilegon</option><option value="403" >Kota Serang</option><option value="456" >Kota Tangerang</option><option value="457" >Kota Tangerang Selatan</option><option value="232" >Kabupaten Lebak</option><option value="331" >Kabupaten Pandeglang</option><option value="402" >Kabupaten Serang</option><option value="455" selected>Kabupaten Tangerang</option>                </select>
                         </div>
                    </div>  

                              <!-- Alamat 1 -->
                              <div class="form-group row mb-0">
                                   <label class="col-md-3 col-form-label form-control-label">Alamat <span class="required">*</span></label>
                                   <div class="col-md-9">
                                        <div class="input-group input-group-merge">
                                             <div class="input-group-prepend">
                                             <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                             </div>
                                             <input type="text" name="company_address" id="company_address" class="form-control" placeholder="Alamat Lengkap" value="Ruko Pisa Grande Blok K Not 12" />
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="card-footer my-0">
                              <div class="row justify-content-center">
                                   <div class="col-lg-6">
                                        <button type="submit" class="btn btn-success my-0 btn-lg mt-2" >Simpan Pengaturan</button>
                                   </div>
                              </div>
                         </div>
                    </form>                            
                         </div>
                         </div>
                         <div class="card mb-2">
                              <div class="card-header py-3 bg-gradient-indigo" id="headCompanyBilling" data-toggle="collapse" data-target="#companyBilling" aria-expanded="false" aria-controls="companyBilling" style="background-color:green">
                                   <h5 class="text-white mb-0">Informasi Bank Perusahaan</h5>
                              </div>
                              <div id="companyBilling" class="collapse" aria-labelledby="headCompanyBilling" data-parent="#accordionGeneralSetting">
                                   <form role="form" method="post" action="https://demo4.cic-webpro.com/setting/updatecompanybilling" id="form-setting-company-billing" class="form-horizontal">
     <div class="card-body wrapper-setting-company-billing">
          <!-- Bank -->
          <div class="form-group row mb-2">
               <label class="col-md-3 col-form-label form-control-label">Nama Bank <span class="required">*</span></label>
               <div class="col-md-9">
                    <select class="form-control" name="company_bank" id="company_bank" data-toggle="select2">
                         <option value="">Pilih Bank</option>
                         <option value="3" >002 - BRI</option><option value="4" >008 - Mandiri</option><option value="2" >009 - BNI</option><option value="12" >011 - Danamon</option><option value="11" >013 - Permata Bank</option><option value="1" selected>014 - BCA</option><option value="13" >016 - BII Maybank</option><option value="48" >019 - Panin</option><option value="7" >022 - CIMB Niaga Syariah</option><option value="6" >022 - CIMB Niaga</option><option value="19" >026 - Lippo</option><option value="16" >028 - OCBC NISP</option><option value="20" >031 - Citibank</option><option value="54" >037 - Artha Graha International</option><option value="49" >046 - DBS Indonesia</option><option value="22" >110 - Bank Jabar Banten (BJB)</option><option value="23" >111 - Bank DKI</option><option value="24" >112 - BPD DIY</option><option value="25" >113 - Bank Jateng</option><option value="26" >114 - Bank Jatim</option><option value="27" >115 - BPD Jambi</option><option value="28" >116 - BPD Aceh</option><option value="29" >117 - Bank Sumut</option><option value="30" >118 - Bank Nagari (Bank Sumbar)</option><option value="31" >119 - Bank Riau Kepri</option><option value="32" >120 - Bank Sumsel Babel</option><option value="33" >121 - Bank Lampung</option><option value="34" >122 - BPD Kalsel</option><option value="35" >123 - BPD Kalimantan Barat</option><option value="36" >124 - BPD Kaltim</option><option value="37" >125 - BPD Kalteng</option><option value="38" >126 - BPD Sulselbar</option><option value="39" >127 - Bank Sulut</option><option value="40" >128 - BPD NTB</option><option value="41" >129 - BPD Bali</option><option value="42" >130 - Bank NTT</option><option value="43" >131 - Bank Maluku</option><option value="44" >132 - BPD Papua</option><option value="45" >133 - Bank Bengkulu</option><option value="46" >134 - BPD Sulawesi Tengah</option><option value="47" >135 - Bank Sultra</option><option value="8" >147 - Muamalat</option><option value="15" >153 - Sinarmas</option><option value="10" >200 - BTN</option><option value="21" >213 - BTPN</option><option value="9" >422 - BRI Syariah</option><option value="51" >425 - Bank BJB Syariah</option><option value="14" >426 - Mega</option><option value="52" >427 - BNI Syariah</option><option value="17" >441 - Bukopin</option><option value="5" >451 - Syariah Mandiri</option><option value="53" >503 - Bank National Nobu (BANK ALFINDO)</option><option value="18" >536 - BCA Syariah</option><option value="50" >566 - Bank Victoria</option>                </select>
               </div>
          </div>

          <!-- Bill Number -->
          <div class="form-group row mb-2">
               <label class="col-md-3 col-form-label form-control-label">No. Rekening Bank <span class="required">*</span></label>
               <div class="col-md-9">
                    <div class="input-group input-group-merge">
                         <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                         </div>
                         <input type="text" class="form-control numbermask" name="company_bill" id="company_bill" placeholder="No. Rekening Bank" value="3831148398" >
                    </div>
               </div>
          </div>

          <!-- Bill Owner -->
          <div class="form-group row mb-0">
               <label class="col-md-3 col-form-label form-control-label">Pemilik Rekening <span class="required">*</span></label>
               <div class="col-md-9">
                    <div class="input-group input-group-merge">
                         <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fa fa-user"></i></span>
                         </div>
                         <input type="text" class="form-control text-uppercase" name="company_bill_name" id="company_bill_name" placeholder="Pemilik Rekening" value="Vivi Evelyn KHOE" />
                    </div>
               </div>
          </div>
     </div>
     <div class="card-footer my-0">
          <div class="row justify-content-center">
               <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary my-0">Simpan Pengaturan</button>
               </div>
          </div>
     </div>
     </form>                            </div>
                         </div>
                         <div class="card mb-2">
                              <div class="card-header py-3 bg-gradient-indigo" id="headRegFee" data-toggle="collapse" data-target="#regFee" aria-expanded="false" aria-controls="regFee"  style="background-color:green">
                                   <h5 class="text-white mb-0">Biaya Pendaftaran Member</h5>
                              </div>
                              <div id="regFee" class="collapse" aria-labelledby="headRegFee" data-parent="#accordionGeneralSetting">
                                   <div class="card-body register_fee_wraper">
     <div class="form-group row mb-2">
          <label class="col-md-3 col-form-label form-control-label">Biaya Registrasi <span class="required">*</span></label>
          <div class="col-md-6">
               <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                         <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                    </div>
                    <input type="text" name="register_fee" id="register_fee" class="form-control numbercurrency" value="389000" />
               </div>
          </div>
          <div class="col-md-3">
               <button 
                    type="button" 
                    class="btn btn-primary general-setting" 
                    data-type="text" 
                    data-id="register_fee" 
                    data-wraper="register_fee_wraper" 
                    data-url="https://demo4.cic-webpro.com/setting/updatesetting/register_fee">
                    Simpan            </button>
          </div>
     </div>
     </div>                            </div>
                         </div>
                         <div class="card mb-2">
                              <div class="card-header py-3 bg-gradient-indigo" id="headPoinPack" data-toggle="collapse" data-target="#colPoinPack" aria-expanded="false" aria-controls="colPoinPack"  style="background-color:green">
                                   <h5 class="text-white mb-0">Poin Paket</h5>
                              </div>
                              <div id="colPoinPack" class="collapse" aria-labelledby="headPoinPack" data-parent="#accordionGeneralSetting">
                                   <div class="card-body">
     <div class="form-group row mb-0">
          <div class="col-md-2 mb-2">
               <label class="form-control-label">Qty Paket</label>
               <input type="text" name="field[cfg_package_qty]" class="form-control numbermask cfg_point_package" value="1" />
          </div>
          <div class="col-md-1 d-none d-md-inline-block">
               <label class="form-control-label" style="display: block">&nbsp;</label>
               <button type="button" class="btn btn-outline-primary general-setting" ><i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="col-md-2">
               <label class="form-control-label">Poin Paket</label>
               <input type="text" name="field[cfg_package_point]" class="form-control numbermask cfg_point_package" value="0" />
          </div>
          <div class="col-md-2">
               <label class="form-control-label" style="display: block">&nbsp;</label>
               <button 
                    type="button" 
                    class="btn btn-primary general-setting-each" 
                    data-type="cfg_point_package" 
                    data-url="https://demo4.cic-webpro.com/setting/updateallsetting">
                    Simpan            </button>
          </div>
     </div>
     </div>                            </div>
                         </div>
                         <div class="card mb-2">
                              <div class="card-header py-3 bg-gradient-indigo" id="headPoinShare" data-toggle="collapse" data-target="#colPoinShare" aria-expanded="false" aria-controls="colPoinShare"  style="background-color:green">
                                   <h5 class="text-white mb-0">Konversi Poin Share</h5>
                              </div>
                              <div id="colPoinShare" class="collapse" aria-labelledby="headPoinShare" data-parent="#accordionGeneralSetting">
                                   <div class="card-body">
                                   <div class="form-group row mb-0">
                                        <div class="col-md-2 mb-2">
                                             <label class="form-control-label">Omset Poin</label>
                                             <input type="text" name="field[cfg_omzet_point]" class="form-control numbermask cfg_point_share" value="0" />
                                        </div>
                                        <div class="col-md-1 d-none d-md-inline-block">
                                             <label class="form-control-label" style="display: block">&nbsp;</label>
                                             <button type="button" class="btn btn-outline-primary general-setting" ><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                        <div class="col-md-2">
                                             <label class="form-control-label">Poin Share</label>
                                             <input type="text" name="field[cfg_share_point]" class="form-control numbermask cfg_point_share" value="0" />
                                        </div>
                                        <div class="col-md-2">
                                             <label class="form-control-label" style="display: block">&nbsp;</label>
                                             <button 
                                                  type="button" 
                                                  class="btn btn-primary general-setting-each" 
                                                  data-type="cfg_point_share" 
                                                  data-url="https://demo4.cic-webpro.com/setting/updateallsetting">
                                                  Simpan            </button>
                                        </div>
                                   </div>
                                   </div>                        
                                   </div>
                                   </div>
                                   <div class="card mb-2">
                                        <div class="card-header py-3 bg-gradient-indigo" id="headFreeShipping" data-toggle="collapse" data-target="#colFreeShipping" aria-expanded="false" aria-controls="colFreeShipping"  style="background-color:green">
                                             <h5 class="text-white mb-0">Gratis Ongkir (Min Order Paket Produk)</h5>
                                        </div>
                                        <div id="colFreeShipping" class="collapse" aria-labelledby="headFreeShipping" data-parent="#accordionGeneralSetting">
                                             <div class="card-body qty_package_free_shipping_wraper">
                                   <div class="form-group row mb-2">
                                   <label class="col-md-3 col-form-label form-control-label">Min Order Paket Produk <span class="required">*</span></label>
                                   <div class="col-md-6">
                                        <div class="input-group input-group-merge">
                                             <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                             </div>
                                             <input type="text" name="qty_package_free_shipping" id="qty_package_free_shipping" class="form-control numbercurrency" value="" />
                                             <div class="input-group-append">
                                                  <span class="input-group-text">Paket</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <button 
                                             type="button" 
                                             class="btn btn-primary general-setting" 
                                             data-type="text" 
                                             data-id="qty_package_free_shipping" 
                                             data-wraper="qty_package_free_shipping_wraper" 
                                             data-url="https://demo4.cic-webpro.com/setting/updatesetting/qty_package_free_shipping">
                                             Simpan            </button>
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
     </div>    <!-- END CONTENT -->