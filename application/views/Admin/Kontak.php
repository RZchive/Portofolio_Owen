<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><i class="fa-solid fa-phone"></i> Data Kontak</h1>
                       <br>
                          <!-- Awal Tabel Mobil -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Sejarah <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Data </button>
                            </div>

                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th width="s" class="text-center">No.</th>                                                                                    
                                            <th>No_Telp</th>
                                            <th>Email</th>
                                            <th>IG</th>
                                            <th>YT</th>
                                            <th>Twitter</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th width="s" class="text-center">No.</th>                                                                                   
                                            <th>No_Telp</th>
                                            <th>Email</th>                         
                                            <th>IG</th>
                                            <th>YT</th>
                                            <th>Twitter</th>
                                            <th>Aksi</th>
                                            
                                           
                                        </tr>
        </tfoot>
                                    <tbody>
                                       <?php $i = 1 ?>
                                            <?php foreach ($Kontak as $o) : ?>
                                        <tr>
                                              <td class="text-center" width="15"><?php echo $i ?></td>
                                           
                                            <td><?= $o->No_Telp ?></td>
                                            <td><?= $o->Email ?></td>
                                            <td><?= $o->IG ?></td>
                                            <td><?= $o->YT ?></td>
                                            <td><?= $o->Twitter ?></td>
                                            <td><button type="button" class="badge badge-primary " data-toggle="modal" data-target="#Editmodal<?=$o->ID ?>"> Edit Data </button>|<a class="badge badge-danger" href="<?= base_url() ?>Admin/delete_kontak/<?=$o->ID ?>">Delete</a></td>
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
                               <h5 class="modal-title" id="exampleModalLabel">Add Data Kontak</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                   </button>
                                  </div>
                                  <form method="post" action="<?= base_url()?>Admin/Tambah_Kontak" enctype="multipart/form-data">
                                  <div class="modal-body">
                                <div class="form-group">
                                  <label for="Umur">Nomor Telepon</label>
                                  <input type="number" class="form-control" id="No_Telp" name="No_Telp" rows="5"></input>
                                </div>
                                <div class="form-group">
                                  <label for="Umur">Email</label>
                                  <input type="email" class="form-control" id="Email" name="Email" rows="5"></input>
                                </div>
                                <div class="form-group">
                                  <label for="Umur">IG</label>
                                  <input type="Text" class="form-control" id="IG" name="IG" rows="5"></input>
                                </div>
                                <div class="form-group">
                                  <label for="Umur">YT</label>
                                  <input type="YT" class="form-control" id="YT" name="YT" rows="5"></input>
                                </div>
                                <div class="form-group">
                                  <label for="Umur">Twitter</label>
                                  <input type="Text" class="form-control" id="Twitter" name="Twitter" rows="5"></input>
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
                            <!-- Akhir modal Tambah Data --> 

<!-- awal modal edit Data -->
<?php foreach ($Kontak as $o) : ?>
  <div class="modal fade" id="Editmodal<?= $o->ID?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kontak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/Edit_Kontak'); ?>" method="post">
      <div class="modal-body">
<div class="form-group">
    <label for="Umur">Nomor Telepon</label>
    <input type="hidden" name="ID" value="<?= $o->ID ?>">
    <input type="number" class="form-control" id="No_Telp" name="No_Telp" rows="5"value="<?=$o->No_Telp?>">
  </div>
  <div class="form-group">
    <label for="Umur">Email</label>
    <input type="email" class="form-control" id="Email" name="Email" rows="5"value="<?=$o->Email?>">
  </div>
  <div class="form-group">
    <label for="Umur">IG</label>
    <input type="Text" class="form-control" id="IG" name="IG" rows="5"value="<?=$o->IG?>">
  </div>
  <div class="form-group">
    <label for="Umur">YT</label>
    <input type="Text" class="form-control" id="Email" name="YT" rows="5"value="<?=$o->YT?>">
  </div>
  <div class="form-group">
    <label for="Umur">Twitter</label>
    <input type="Text" class="form-control" id="Twitter" name="Twitter" rows="5"value="<?=$o->Twitter?>">
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