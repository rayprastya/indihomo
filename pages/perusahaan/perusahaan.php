<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data Perusahaan</a></li>
  </ol>
  <h1 class="page-header">Data Perusahaan</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a href="index.php?m=user&s=user_add" target="_blank" class="btn btn-icon btn-sm btn-inverse"><i class="fa fa-plus-square"></i></a>
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
          <p>Silahkan input <b>Data User</b> Pada Button icon "<i class="fa fa-plus-square"></i>"</p>
        </div>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <!-- <th class="text-nowrap">NIP</th> -->
                <th class="text-nowrap">Nama Perusahaan</th>
                <th class="text-nowrap">Logo Perusahaan</th>
                <th class="text-nowrap">Alamat Perusahaan</th>
                <th class="text-nowrap">Nomor Telepon Perusahaan</th>
                <th class="text-nowrap">Email Perusahaan</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM perusahaan ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['nama_perusahaan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_perusahaan'] ?></td>
                <td><?= $row['logo_perusahaan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['logo_perusahaan'] ?></td>
                <td><?= $row['alamat_perusahaan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['alamat_perusahaan'] ?></td>
                <td><?= $row['nomor_telp'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nomor_telp'] ?></td>
                <td><?= $row['email_perusahaan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['email_perusahaan'] ?></td>
                
                <td>  
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=perusahaan&s=perusahaan_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data Perusahaan</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-12">
                          <div class="image" align="center">
                              <?php
                              if ($row['foto']==NULL) { ?>
                                  <img src="assets/img/user/user-13.jpg" alt="" class="lingkaran" />   
                              <?php }else{ ?>
                                  <img src="<?php echo base_url().'assets/img/user/'. $row['foto'];?>" alt="" class="lingkaran" />   
                              <?php } ?>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Nama Perusahaan</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="namaperusahaan" value="<?= $row['nama_perusahaan'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Logo Perusahaan</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="logoperusahaan" value="<?= $row['logo_perusahaan'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Alamat Perusahaan</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="alamatperusahaan" value="<?= $row['alamat_perusahaan'] ?>"/>
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
                        <label class="col-lg-4 col-form-label">Nomor Telepon</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomorperusahaan" value="<?= $row['nomor_telp'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Email Perusahaan</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="email" class="form-control" name="emailperusahaan" value="<?= $row['email_perusahaan'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                      <hr>
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
      location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id_user;
    }
  }
</script>