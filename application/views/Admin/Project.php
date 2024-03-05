<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fa-brands fa-readme"></i> Project</h1>
                      <br>
                       
                          <!-- Awal Tabel Mobil -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Project <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Data </button>
                            </div>

                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                    <th width="s" class="text-center">No.</th>
                                            <th>Gambar</th>
                                            <th>Nama_Project</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th width="s" class="text-center">No.</th>
                                            <th>Gambar</th>
                                            <th>Nama_Project</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
        </tfoot>
                                    <tbody>
                                         <?php $i = 1 ?>
                                            <?php foreach ($Project as $j) : ?>
                                        <tr>
                                            <td class="text-center" width="15"><?php echo $i ?></td>
                                            <td><img src="<?= base_url() ;?>gambar/<?=$j->Gambar ?>" width="70" height="90"></td>
                                            <td><?= $j->Nama_Project ?></td>    
                                            <td><?= $j->Link ?></td>    
                                            <td><button type="button" class="badge badge-primary " data-toggle="modal" data-target="#Editmodal<?=$j->ID ?>"> Edit Data </button>|<a class="badge badge-danger" href="<?= base_url() ?>Admin/delete_project/<?=$j->ID ?>">Delete</a></td>
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
                               <h5 class="modal-title" id="exampleModalLabel">Add Data Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                   </button>
                                  </div>
                                  <form method="post" action="<?= base_url()?>Admin/Tambah_Project" enctype="multipart/form-data">
                                  <div class="modal-body">
                                  <div class="form-group">
                                    <label for="Umur">Nama Project</label>
                                    <input type="Text" class="form-control" id="Nama_Project" name="Nama_Project" rows="5"></input>
                                  </div>
                                <div class="form-group">
                                  <label for="Umur">Link</label>
                                  <Input type="text" class="form-control" id="Link" name="Link" ></Input>
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
<?php foreach ($Project as $j) : ?>
  <div class="modal fade" id="Editmodal<?= $j->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Edit_Project'); ?>" method="post">
      <div class="modal-body">
      <div class="form-group">
    <label for="Umur">Nama Project</label>
    <input type="Text" class="form-control" id="Nama_Project" name="Nama_Project" rows="5"value="<?=$o->Nama_Project?>">
  </div>
  <div class="form-group">
    <label for="Umur">Link</label>
    <input type="hidden" name="ID" value="<?= $j->ID ?>">
    <input type="text" class="form-CONTROL" id="Link" name="Link" Value="<?= $j->Deskripsi ?>"></input>
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