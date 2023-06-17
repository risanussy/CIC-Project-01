<div class="container-fluid mt--6" style="overflow-x:scroll">
  <div class="row mt-5">
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
              <form action="<?= base_url('staff'); ?>" method="post">
                <!-- Alert Message -->
                <div id="alert" class="alert display-hide"></div>

                <div class="form-group">
                </div>
                <div id="sponsor_info"></div>
                <hr class="mt-3 mb-3">
                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <label class="col-md-3 form-control-label col-form-label text-dark" for="username">Username <span class="required">*</span></label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Minimal 6 karakter, bisa kombinasi huruf & angka" autocomplete="off" required value="<?= set_value('username'); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <label class="col-md-3 form-control-label col-form-label text-dark" for="nama">Nama <span class="required">*</span></label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Agen" autocomplete="off" value="<?= set_value('nama'); ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <label class="col-md-3 form-control-label col-form-label text-dark" for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge">
                    <label class="col-md-3 form-control-label col-form-label text-dark" for="no_Telp">No. HP/WA <span class="required">*</span></label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">+62</span>
                    </div>
                    <input type="tel" class="form-control" name="npwp" name="no_telp" id="no_Telp" placeholder="8xxxxxxxxx" value="<?= set_value('npwp'); ?>" required>
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                  </div>
                </div>
                <!-- <script src="<?= base_url('assets/js/tambah/npwp.js'); ?>"></script> -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error("password1", "<small class=text-danger pl-3>", "</small>"); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    <?= form_error("password1", "<small class=text-danger pl-3>", "</small>"); ?>
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
<script src="<?= base_url('assets/js/reset.js'); ?>"></script>
