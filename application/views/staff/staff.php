<div class="header bg-gradient-underlake pb-6">
     <div class="container-fluid">
          <div class="header-body">
               <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-5">
                    <a href="<?= base_url('staff/foam') ?>" class="btn btn-sm btn-neutral mb-4 bg-dark text-success"><i class="fa fa-plus mr-1 mt-3"></i> Tambah Staff</a>
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
                                   <h3 class="mb-0">Manage Staff</h3>
                              </div>
                         </div>
                    </div>
                    <div class="table-container">
                         <table class="table align-items-center table-flush cell-border stripe order-column hover" id="list_table">
                              <thead class="bg-success">
                                   <tr role="row" class="heading" style="color:white !important;">
                                        <th scope="col" style="width: 10px">#</th>
                                        <th scope="col" class="text-center">Username</th>
                                        <th scope="col" class="text-center">Nama</th>
                                        <th scope="col" class="text-center">Akses</th>
                                        <th scope="col" class="text-center" style="width: 200px;">Proses</th>
                                   </tr>
                              </thead>
                              <tbody class="list">
                                   <?php $i = 1; ?>
                                   <?php foreach ($staff as $row) : ?>
                                        <tr>
                                             <td class="text-center"><?= $i; ?></td>
                                             <td class="text-center"><?= $row->username; ?></td>
                                             <td class="text-center"><?= $row->name; ?></td>
                                             <td class="text-center">Semua Fitur</td>
                                             <td class="text-center">
                                                  <button class="btn btn-sm btn-block btn-outline-success btn-tooltip filter-cancel" title="Edit" data-toggle="modal" data-target="#editModal<?= $row->id ?>"><i class="fa-solid fa-pen"></i>Edit</button>
                                                  <button class="btn btn-sm btn-block btn-outline-warning btn-tooltip filter-cancel" title="Reset password"><i class="fa-solid fa-key"></i>Reset Password</button>
                                                  <a href="<?= base_url('Staff/deleteStaff/' . $row->id); ?>" class="btn btn-sm btn-block btn-outline-danger btn-tooltip filter-cancel" data-original-title="Remove" onclick="return confirm('Are you sure?')">
                                                       <i class="fas fa-trash"></i>
                                                  </a>
                                             </td>
                                        </tr>

                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal<?= $row->id ?>" tabindex="-1" aria-labelledby="editModal<?= $row->id ?>Label" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="editModal<?= $row->id ?>Label">Edit Data Staff</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                 <span aria-hidden="true">&times;</span>
                                                            </button>
                                                       </div>
                                                       <div class="modal-body">
                                                            <form action="<?= base_url('Staff/editData'); ?>" method="post">
                                                                 <input type="hidden" name="id" value="<?= $row->id ?>">
                                                                 <div class="form-group">
                                                                      <label for="name">Nama</label>
                                                                      <input type="text" name="name" class="form-control" value="<?= $row->name ?>">
                                                                 </div>
                                                                 <div class="form-group">
                                                                      <label for="username">Username</label>
                                                                      <input type="text" name="username" class="form-control" value="<?= $row->username ?>">
                                                                 </div>
                                                                 <div class="form-group">
                                                                      <label for="no_telp">No. Telp</label>
                                                                      <input type="text" name="no_telp" class="form-control" value="<?= $row->no_telp ?>">
                                                                 </div>
                                                                 <div class="form-group">
                                                                      <label for="email">Email</label>
                                                                      <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
                                                                 </div>
                                                                 <div class="form-group row">
                                                                 <label class="col-sm-2 col-form-label"><i class="fas fa-camera fa-2x mb-5"></i></label>
                                                                 <div class="col-sm-10">
                                                                      <div class="row">
                                                                           <div class="col-sm-9">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input" id="gambar" name="Gambar">
                                                                                     <label class="custom-file-label" for="gambar">Choose file</label>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      </div>
                                                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </form>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   <?php $i++; ?>
                                   <?php endforeach; ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
