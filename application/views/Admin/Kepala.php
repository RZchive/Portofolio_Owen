<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fa-brands fa-readme"></i> Kepala</h1>
                      <br>
                       
                          <!-- Awal Tabel Mobil -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kepala <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Data </button>
                            </div>

                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                              <th width="s" class="text-center">No.</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th width="s" class="text-center">No.</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
        </tfoot>
                                    <tbody>
                                         <?php $i = 1 ?>
                                            <?php foreach ($Kepala as $k) : ?>
                                        <tr>
                                            <td class="text-center" width="15"><?php echo $i ?></td>
                                            <td><img src="<?= base_url() ;?>gambar/<?=$k->Gambar ?>" width="70" height="90"></td>
                                            <td><?= $k->Deskripsi ?></td>    
                                            <td><button type="button" class="badge badge-primary " data-toggle="modal" data-target="#Editmodal<?=$k->ID ?>"> Edit Data </button>|<a class="badge badge-danger" href="<?= base_url() ?>Admin/delete_kepala/<?=$k->ID ?>">Delete</a></td>
                                        </tr>
                                          <?php $i++ ?>
                                        <?php endforeach ?>
                                     </tbody>
                                            
                                </table>
                            </div>
                        </div>
                        <!-- Akhir Tabel -->
                    </div>
                    </div>
                    </div>
                    <!-- awal modal Tambah Data -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Add Data Kepala</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                   </button>
                                  </div>
                                  <form method="post" action="<?= base_url()?>Admin/Tambah_Kepala" enctype="multipart/form-data">
                                  <div class="modal-body">
                                <div class="form-group">
                                  <label for="Umur">Deskripsi</label>
                                  <textarea class="ckeditor" id="Deskripsi" name="Deskripsi" rows="5"></textarea>
                                </div>
                                <div class="form-group row">
                                  <label for="inputBuku" class="col-sm-2 col-form-label"><b>Gambar</b></label>
                                  <div class="col-sm-10">
                                  <input type="file" class="form-control" id="berkas" name="berkas">
                               </div>
                        </div>
                          </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                         </div>
                                            </form>
                       </div>
                     </div>
                   </div>
        </div>
                            <!-- Akhir modal Tambah Data --> 

<!-- awal modal edit Data -->
<?php foreach ($Kepala as $k) : ?>
  <div class="modal fade" id="Editmodal<?= $k->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kepala</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Edit_Kepala'); ?>" method="post">
      <div class="modal-body">

  <div class="form-group">
    <label for="Umur">Deskripsi</label>
    <input type="hidden" name="ID" value="<?= $k->ID ?>">
    <textarea class="ckeditor" id="Deskripsi" name="Deskripsi" rows="5" Value="<?= $k->Deskripsi ?>"><?= $k->Deskripsi ?></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal Edit data-->