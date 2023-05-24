<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="row justify-content-center">
        <div class="col-lg-10 card-wrapper">
          <div class="card">
            <div class="card-header bg-dark">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-light">Formulir Pendaftaran Agen Baru</h3>
                </div>
              </div>
            </div>
            <div class="card-body wrapper-form-register pt-0">
              <form>
                <!-- Alert Message -->
                <div id="alert" class="alert display-hide"></div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="usernameSponsor">Username Sponsor <span class="required">*</span></label>
                    <input type="hidden" name="reg_member_sponsor_admin" id="reg_member_sponsor_admin" value="admin" />
                    <input type="text" class="form-control" id="usernameSponsor" placeholder="Username Sponsor" autocomplete="off" value="" required>
                    <button class="btn btn-primary" type="button" id="btn_search_sponsor" data-url="https://demo4.cic-webpro.com/member/searchsponsor">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>

                <div id="sponsor_info"></div>

                <hr class="mt-3 mb-3">

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="username">Username <span class="required">*</span></label>
                    <input type="text" class="form-control" id="username" placeholder="Minimal 6 karakter, bisa kombinasi huruf & angka" autocomplete="off" data-url="https://demo4.cic-webpro.com/member/checkusernamestaff" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="nama">Nama <span class="required">*</span></label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Agen" autocomplete="off" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="email">Email <span class="required">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="noTelp">No. HP/WA <span class="required">*</span></label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">+62</span>
                    </div>
                    <input type="tel" class="form-control" id="noTelp" placeholder="8xxxxxxxxx" required>
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="nik">NIK <span class="required">*</span></label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="nik" placeholder="NIK" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="npwp">NPWP</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="npwp" placeholder="Isi semua dengan 0 jika tidak ada NPWP">
                  </div>
                </div>

                <hr class="mt-3 mb-3">

                <div class="form-group">
                  <div class="input-group input-group-merge">
                  <label class="col-md-3 form-control-label col-form-label text-dark" for="peringkat">Peringkat</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-star"></i></span>
                    </div>
                        <select class="form-control" id="peringkat">
                            <option value="basic">Agen Pemula</option>
                            <option value="senior">Agen Senior</option>
                            <option value="executive">Agen Eksekutif</option>
                        </select>
                  </div>
                </div>

                <div class="form-group mb-1">
                  <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input" id="termCondition" value="1">
                    <label class="custom-control-label" for="termCondition" style="vertical-align: unset;">Saya Setuju Dengan Persayaratan Dan Kondisi Pendaftaran.</label>
                    <a href="javascript:;" class="term_condition">Term &amp; Condition</a>
                  </div>
                </div>

                <hr class="mt-0 mb-4" />

                <div class="row justify-content-center">
                  <div class="col-lg-5">
                    <button type="submit" class="btn btn-primary bg-gradient-underlake" id="btn-register">Daftarkan Agen</button>
                    <button type="button" class="btn btn-danger bg-gradient-danger btn-register-reset">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
