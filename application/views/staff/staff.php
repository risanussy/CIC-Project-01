     <!-- BEGIN Manage Staff -->
     <div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-5 ">
                         <a href="" class="btn btn-sm btn-neutral shadow"><i class="fa fa-plus mr-1"></i> Tambah Staff</a>
                    </div>
               </div>
          </div>
     </div>
     </div>

     <div class="container-fluid mt--6">
     <div class="row">
          <div class="col">
               <div class="card">
                    <div class="card-header border-0">
                         <div class="row align-items-center">
                         <div class="col">
                              <h3 class="mb-0">Manage Staff </h3>
                         </div>
                         </div>
                    </div>
                    <div class="table-container">
                         <table class="table align-items-center table-flush" id="list_table_staff" >
                         <thead class="bg-success">
                              <tr role="row" class="heading" style="color:white !important;">
                                   <th scope="col" style="width: 10px">#</th>
                                   <th scope="col" class="text-center">Username</th>
                                   <th scope="col" class="text-center">Nama</th>
                                   <th scope="col" class="text-center">Akses</th>
                                   <th scope="col" class="text-center">Proses</th>
                              </tr>
                              <tr role="row" class="filter" style="background-color: #f6f9fc">
                                   <td></td>
                                   <td><input type="text" class="form-control form-control-sm form-filter" name="search_username" /></td>
                                   <td><input type="text" class="form-control form-control-sm form-filter" name="search_name" /></td>
                                   <td></td>
                                   <td style="text-align: center;">
                                        <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Delet"><i class="fa-solid fa-trash-can"></i></button>
                                   </td>
                              </tr>
                         </thead>
                         <tbody class="list">
                              <!-- Data Will Be Placed Here -->
                              <tr>                         
                                        <td>1.</td>
                                        <td>Rian123r</td>
                                        <td>Andrian</td>
                                        <td>Semua Fitur</td> 
                                        <td>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Edit"><i class="fa-solid fa-pen"></i>Edit</button>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Reset password"><i class="fa-solid fa-key"></i>Reset Password</button>
                                             <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Hapus">Hapus</button>
                                        </td> 

                              </tr>
                         </tbody>
                         </table>
                    </div>

               </div>
          </div>
     </div>
     </div>

     <div class="modal fade" id="modal_staff_reset_password" tabindex="-1" role="dialog" aria-labelledby="modal_staff_reset_password" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title"><i class="ni ni-key-25"></i> Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form role="form" method="post" action="https://demo4.cic-webpro.com/staff/resetpassword" id="form_staff_reset_password" class="form-horizontal">
                    <input type="hidden" name="staff_id" id="staff_id">
                    <div class="modal-body wrapper-form_staff_reset_password py-2">
                         <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Username <span class="required">*</span></label>
                         <div class="col-md-9">
                              <div class="input-group input-group-merge">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                   </div>
                                   <input type="text" name="staff_username" id="staff_username" class="form-control text-lowercase" autocomplete="off" disabled="" />
                              </div>
                         </div>
                         </div>

                         <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Password <span class="required">*</span></label>
                         <div class="col-md-9">
                              <div class="input-group input-group-merge">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                   </div>
                                   <input type="password" name="staff_password" id="staff_password" class="form-control" placeholder="Password harus berisikan minimal 1 huruf dan 1 angka" autocomplete="off" value="" />
                                   <div class="input-group-append">
                                        <button class="btn btn-default pass-show-hide" type="button"><i class="fa fa-eye-slash"></i></button>
                                   </div>
                              </div>
                         </div>
                         </div>

                         <div class="form-group row mb-2">
                         <label class="col-md-3 col-form-label form-control-label">Confirm password <span class="required">*</span></label>
                         <div class="col-md-9">
                              <div class="input-group input-group-merge">
                                   <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                   </div>
                                   <input type="password" name="staff_password_confirm" id="staff_password_confirm" class="form-control" placeholder="Konfirmasi Password" autocomplete="off" value="" />
                                   <div class="input-group-append">
                                        <button class="btn btn-default pass-show-hide" type="button"><i class="fa fa-eye-slash"></i></button>
                                   </div>
                              </div>
                         </div>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                         <button type="submit" class="btn btn-primary" id="btn-staff-reset-password">Simpan</button>
                    </div>
               </form>
          </div>
     </div>
     </div>    <!-- END CONTENT -->

