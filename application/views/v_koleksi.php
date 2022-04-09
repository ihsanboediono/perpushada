<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-3">
            
          </section>
          <section class="py-3">
            <div class="row mb-2">
              <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="card">
                  <div class="card-header">
                    <h2 class="h6 text-uppercase mb-0">Koleksi</h2>
                            
                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="tambah_buku">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Koleksi</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>perpus/add_koleksi" >
                                <!-- <input type="hidden" name="id" id="id" value=> -->
								                      <div class="mb-3 row">
								                      </div>
                                      <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" class="form-control" name="judul_koleksi" placeholder="Judul Koleksi">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penulis</label>
                                                <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" >
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Pencipta</label>
                                                <input type="text" class="form-control" name="pencipta" placeholder="Penerbit" >
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Tahun Terbit</label>
                                                <input type="date" class="form-control" name="tahun_terbit" placeholder="" >
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Jenis Koleksi</label>
                                                <select class="form-control" name="jenis_koleksi">
                                                  <option value="buku">Buku</option>
                                                  <option value="majalah">Majalah</option>
                                                </select>
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
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
                              <th>Judul Buku</th>
                              <th>Pencipta</th>
                              <th>Penulis</th>
                              <th>Penerbit</th>
                              <th>Tahun Terbit</th>
                              <th>Jenis</th>
                              <th><center>Action</center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;?>
                            <?php foreach($buku as $i): ?>
                            <tr>
                              <td><?php echo $no++ ;?></td>
                              <td><?php echo $i->judul_koleksi ;?></td>
                              <td><?php echo $i->pencipta ;?></td>
                              <td><?php echo $i->penulis ;?></td>
                              <td><?php echo $i->penerbit ;?></td>
                              <td><?php echo $i->tahun_terbit ;?></td>
                              <td><?php echo $i->jenis ;?></td>
                              <td align=center>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_koleksi<?= $no?>"><i class="fas fa-pencil-alt"></i>
                              Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus_koleksi<?= $i->id_koleksi?>">
                              <i class="fas fa-trash-alt" data-tolltip="tooltip" data-placement="top"></i>
                              Hapus
                            </button>
                        </td>
                        <!-- MODAL HAPUS -->
                        <div class="modal fade" id="hapus_koleksi<?= $i->id_koleksi?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                      <a href="<?= base_url('perpus/delete_koleksi/' . $i->id_koleksi)?>" class="btn btn-danger"> Hapus</a>
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
                              <h4 class="modal-title">Edit Data Buku</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>perpus/edit_koleksi" >
                                <input type="hidden" name="id" id="id" value="<?= $i->id_koleksi?>">
                                <input type="hidden" name="jenis_koleksi" id="id" value="<?= $i->jenis_koleksi?>">
								                      <div class="mb-3 row">
								                      </div>
                                      <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" name="judul_koleksi" placeholder="Judul" value="<?= $i->judul_koleksi?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penulis</label>
                                                <input type="text" class="form-control" name="penulis" placeholder="Penulis" value="<?= $i->penulis?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Pencipta</label>
                                                <input type="text" class="form-control" name="pencipta" placeholder="pencipta" value="<?= $i->pencipta?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" name="penerbit" placeholder="penerbit" value="<?= $i->penerbit?>">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Tahun Terbit</label>
                                                <input type="date" class="form-control" name="tahun_terbit" value="<?= $i->tahun_terbit?>">
                                              </div>
                                            </div>
                                        </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
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