<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Rincian Produk</a></li>
  </ol>
  <h1 class="page-header">Rincian Produk</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a href="index.php?m=barang&s=barang_add" target="_blank" class="btn btn-icon btn-sm btn-inverse"><i class="fa fa-plus-square"></i></a>
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <div class="alert alert-warning fade show">
          <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          </button>
          <p>Silahkan input <b>Produk</b> Pada Button icon "<i class="fa fa-plus-square"></i>"</p>
        </div>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <!-- <th class="text-nowrap">NIP</th> -->
                <th class="text-nowrap">Kode Produk</th>
                <th class="text-nowrap">Nama Produk</th>
                <th class="text-nowrap">Keterangan</th>
                <th class="text-nowrap">Harga</th>
                <th class="text-nowrap">Telepon</th>
                <th class="text-nowrap">Internet</th>
                <th class="text-nowrap">Tv</th>
                <th class="text-nowrap">Paket</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM produk ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['kode_produk'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kode_produk'] ?></td>
                <td><?= $row['nama_produk'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_produk'] ?></td>
                <td><?= $row['keterangan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['keterangan'] ?></td>
                <td><?= $row['harga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['harga'] ?></td>
                <td><?= $row['telepon'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['telepon'] ?></td>
                <td><?= $row['internet'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['internet'] ?></td>
                <td><?= $row['tv'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['tv'] ?></td>
                <td><?= $row['paket'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['paket'] ?></td>
                
                <td>
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=barang&s=barang_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Produk</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Kode Produk</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="kodeprduk" value="<?= $row['kode_produk'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Nama Produk</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="namaproduk" value="<?= $row['nama_produk'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Keterangan Produk</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Agama</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="agama" required>
                                    <option value=""></option>
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-gem"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Harga</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="harga" value="<?= $row['harga'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Telepon</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="harga" value="<?= $row['telepon'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Internet</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="harga" value="<?= $row['internet'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Tv</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="harga" value="<?= $row['tv'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="form-group row">
                          <label class="col-lg-4 col-form-label">Paket</label>
                          <div class="col-lg-8">
                              <div class="input-group">
                                  <select class="form-control" name="paket" required>
                                      <option value=""></option>
                                      <option value="">-- Pilih Paket --</option>
                                      <option value="Biasa">Biasa</option>
                                      <option value="Promo">Promo</option>
                                      <option value="Lainnya">Lainnya</option>
                                  </select>
                                  <div class="input-group-addon">
                                      <i class="fa fa-gem"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END DETAILS -->
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/barang/barang_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>