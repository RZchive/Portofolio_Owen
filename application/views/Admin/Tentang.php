<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fa-brands fa-readme"></i> Tentang</h1>
                      <br>
                       
                          <!-- Awal Tabel Mobil -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Tentang <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Data </button>
                            </div>

                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                              <th width="s" class="text-center">No.</th>
                                            
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th width="s" class="text-center">No.</th>
                                          
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
        </tfoot>
                                    <tbody>
                                         <?php $i = 1 ?>
                                            <?php foreach ($Tentang as $e) : ?>
                                        <tr>
                                            <td class="text-center" width="15"><?php echo $i ?></td>
                                            
                                            <td><?= $e->Deskripsi ?></td>    
                                            <td><button type="button" class="badge badge-primary " data-toggle="modal" data-target="#Editmodal<?=$e->ID ?>"> Edit Data </button>|<a class="badge badge-danger" href="<?= base_url() ?>Admin/delete_tentang/<?=$e->ID ?>">Delete</a></td>
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
                               <h5 class="modal-title" id="exampleModalLabel">Add Data Tentang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                   </button>
                                  </div>
                                  <form method="post" action="<?= base_url()?>Admin/Tambah_Tentang" enctype="multipart/form-data">
                                  <div class="modal-body">
                                  
                                      <div class="form-group">
                                  <label for="Umur">Deskripsi</label>
                                  <textarea class="ckeditor" id="Deskripsi" name="Deskripsi" rows="5"></textarea>
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
<?php foreach ($Tentang as $e) : ?>
  <div class="modal fade" id="Editmodal<?= $e->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Tentang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Edit_Tentang'); ?>" method="post">
      <div class="modal-body">
    
  <div class="form-group">
    <label for="Umur">Deskripsi</label>
    <input type="hidden" name="ID" value="<?= $e->ID ?>">
    <textarea class="ckeditor" id="Deskripsi" name="Deskripsi" rows="5" Value="<?= $e->Deskripsi ?>"><?= $e->Deskripsi ?></textarea>
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