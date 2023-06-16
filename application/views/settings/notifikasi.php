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
                         <div class="card-header border-0">
                              <div class="row align-items-center">
                                   <div class="col">
                                        <h3 class="mb-0">Notifikasi </h3>
                                   </div>
                              </div>
                         </div>
                         <div class="table-container">
                              <table class="table align-items-center table-flush" id="notification_list"
                                   data-url="https://demo4.cic-webpro.com/setting/notificationlistdata">
                                   <thead class="bg-success">
                                        <tr role="row" class="heading" style="color:white !important;">
                                             <th class="width5 text-center">No</th>
                                             <th class="width55 text-center">Nama</th>
                                             <th class="width15 text-center">Tipe</th>
                                             <th class="width15 text-center">Status</th>
                                             <th class="width10 text-center">Proses</th>
                                        </tr>

                                   </thead>
                                   <tbody class="list">
                                        <!-- Data Will Be Placed Here -->
                                        <tr>
                                             <td>1.</td>
                                             <td>Notification New Member</td>
                                             <td>
                                                  <div class="alert alert-success text-center" role="alert"
                                                       style="width:50px !important; padding:2px !important">
                                                       Email
                                                  </div>
                                             </td>
                                             <td>
                                                  <div class="alert alert-success text-center" role="alert"
                                                       style="width:50px !important; padding:2px !important">
                                                       Aktif
                                                  </div>
                                             </td>
                                             <td style="text-align: center;">
                                                  <button
                                                       class="btn btn-sm btn-outline-success btn-tooltip filter-cancel"
                                                       title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                  <button
                                                       class="btn btn-sm btn-outline-success btn-tooltip filter-cancel"
                                                       title="View"><i class="fa-solid fa-eye"></i></button>
                                             </td>

                                        </tr>
                                        <tr>
                                             <td>2.</td>
                                             <td>Notification Transfer PIN Sender</td>
                                             <td>
                                                  <div class="alert alert-success text-center" role="alert"
                                                       style="width:50px !important; padding:2px !important">
                                                       Email
                                                  </div>
                                             </td>
                                             <td>
                                                  <div class="alert alert-danger text-center" role="alert"
                                                       style="width:100px !important; padding:2px !important">
                                                       Tidak Aktif
                                                  </div>
                                             </td>
                                             <td style="text-align: center;">
                                                  <button
                                                       class="btn btn-sm btn-outline-success btn-tooltip filter-cancel"
                                                       title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                  <button
                                                       class="btn btn-sm btn-outline-success btn-tooltip filter-cancel"
                                                       title="View"><i class="fa-solid fa-eye"></i></button>
                                             </td>

                                        </tr>
                                   </tbody>
                              </table>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <!-- Modal Form Promo Code -->
     <div class="modal fade" id="modal-form-notification" tabindex="-1" role="dialog"
          aria-labelledby="modal-form-notification" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title">
                              <i class="fa fa-envelope" id="notif_edit_icon"></i> <span id="notif_edit_title"></span>
                         </h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <form action="https://demo4.cic-webpro.com/setting/updatenotification" role="form" method="post"
                         class="form-horizontal" id="form_notif_edit">
                         <input type="hidden" name="notif_id" id="notif_id" class="hide">
                         <input type="hidden" name="notif_type" id="notif_type" class="hide">
                         <div class="modal-body wrapper_notif_edit py-2">
                              <div class="form-group mb-2">
                                   <label class="control-label">Title <span class="required">*</span></label>
                                   <input type="text" name="notif_title" id="notif_title" class="form-control">
                              </div>
                              <div class="form-group mb-2">
                                   <label class="control-label">Status <span class="required">*</span></label>
                                   <select name="notif_status" id="notif_status" class="form-control">
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                   </select>
                              </div>
                              <div class="form-group mb-0 display-none" id="content_email">
                                   <label class="control-label">Pesan <span class="required">*</span></label>
                                   <textarea class="form-control ckeditor" id="notif_content_email"
                                        name="notif_content_email" rows="5" style="resize: vertical;"></textarea>
                              </div>
                              <div class="form-group mb-0 display-none" id="content_plain">
                                   <label class="control-label">Pesan <span class="required">*</span></label>
                                   <textarea class="form-control" id="notif_content_plain" name="notif_content_plain"
                                        rows="5"
                                        style="resize: vertical; height: 300px; padding: 5px 10px; border: 1px solid #2b579a;"></textarea>
                              </div>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <div class="modal fade" id="notification_view_modal" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content">
                    <div class="modal-header">
                         <h4 class="modal-title">
                              <span class="label label-primary pull-right" id="notif_view_color"
                                   style="margin-right: 8px">
                                   <i class="fa fa-envelope" id="notif_view_icon"></i>
                                   <span id="notif_view_type">Email</span>
                              </span>
                              <b><span id="notif_view_title"></span></b>
                         </h4>
                    </div>
                    <div class="modal-body" style="background-color: #F5F5F5">
                         <div id="notif_view_content"></div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-flat btn-warning" data-dismiss="modal">Close</button>
                    </div>
               </div>
          </div>
     </div> <!-- END CONTENT -->