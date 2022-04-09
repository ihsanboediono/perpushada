<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-3">
            
          </section>
          <section class="py-3">
            <div class="row mb-2">
              <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h2 class="h6 text-uppercase mb-0">Data Users</h2>
                            
                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="tambah_buku">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Data User</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>perpus/add_user" >
                                <!-- <input type="hidden" name="id" id="id" value=> -->
								                      <div class="mb-3 row">
								                      </div>
                                      <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="password" placeholder="Password">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea type="" class="form-control" name="password"></textarea>
                                              </div>
                                            </div>
                                        </div>
                                        
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->
                  </div>
                  <div class="card-body">
                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah_buku">
                              Tambah
                            </button>
                    <div class="row">
                    <div class="table-responsive p-3">
                        <table class="table table-bordered" id="table_user">
                          <thead class="thead-light">
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Alamat</th>
                              <th><center>Action</center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;?>
                            <?php foreach($data as $i): ?>
                            <tr>
                              <td><?php echo $no++ ;?></td>
                              <td><?php echo $i->username ;?></td>
                              <td><?php echo $i->email ;?></td>
                              <td><?php echo $i->alamat ;?></td>
                              <td align=center>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_koleksi<?= $no?>"><i class="fas fa-pencil-alt"></i>
                              Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus_koleksi<?= $i->id_user?>">
                              <i class="fas fa-trash-alt" data-tolltip="tooltip" data-placement="top"></i>
                              Hapus
                            </button>
                        </td>
                        <!-- MODAL HAPUS -->
                        <div class="modal fade" id="hapus_koleksi<?= $i->id_user?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                     <div class="row">
                                         <div class="col-3 d-flex justify-content-center">
                                              <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                                          </div>
                                          <div class="col-9 pt-2">
                                              <h5>Apakah anda yakin?</h5>
                                              <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                                          </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal"> Batal</button>
                                      <a href="#" class="btn btn-danger"> Hapus</a>
                                 </div>
                             </div>
                         </div>
                      </div>
                        <!-- END MODAL HAPUS -->
                        <!-- MODAL EDIT -->
                        <div class="modal fade" id="edit_koleksi<?= $no;?>">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Edit Data Users</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="#" >
                                <input type="hidden" name="id" id="id" value="<?= $i->id_user?>">
                                <!-- <input type="hidden" name="jenis_koleksi" id="id" value="<?= $i->jenis_koleksi?>"> -->
								                      <div class="mb-3 row">
								                      </div>
                                      <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $i->username?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="email" placeholder="Email" value="<?= $i->password?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $i->email?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"><?= $i->alamat?></textarea>
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->
                    <!-- /MODAL EDIT -->
                            </tr>
                            <?php endforeach?>
                          </tbody>
                        </table>
                    </div> <!--end div class table -->
                    </div> <!--end div class row -->
                </div> <!--end div class card body -->
            </div> <!--end div class card -->
            </div>
            </div>
        </section>
        </div>
        <script type="text/javascript">
          function deleteConfirm(url) {
          $('#btn-delete').attr('href', url);
          $('#deleteModal').modal();
          }
        </script>
        <script>
            $(function () {
            $("#example1").table_users({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>