<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data User</a></li>
  </ol>
  <h1 class="page-header">Data User</h1>
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
                <th class="text-nowrap">Nama Username</th>
                <th class="text-nowrap">Nama Lengkap</th>
                <th class="text-nowrap">Email</th>
                <th class="text-nowrap">Nomor HP</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM user ORDER BY id_user DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['username'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['username'] ?></td>
                <td><?= $row['nama_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_user'] ?></td>
                <td><?= $row['email_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['email_user'] ?></td>
                <td><?= $row['nomorhp_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nomorhp_user'] ?></td>
                
                <td>
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id_user']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=user&s=user_edit&id=<?= $row['id_user'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a href="index.php?m=user&s=user_password&id=<?= $row['id_user'] ?>" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i></a>
                    <a onclick="deleteData(<?= $row['id_user'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id_user']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data User</label>
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
                        <label class="col-lg-4 col-form-label">Username</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" value="<?= $row['username'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Nama Lengkap</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_user" value="<?= $row['nama_user'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Email</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email_user" value="<?= $row['email_user'] ?>"/>
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
                        <label class="col-lg-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="jk_user" required>
                                    <option value="<?= $row['jenis_kelamin'] ?>"><?= $row['jk_user'] ?></option>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-mercury"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Nomor Telepon</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomorhp_user" value="<?= $row['nomorhp_user'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Hak Akses</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="role" required>
                                    <option value="<?= $row['role'] ?>"><?= $row['role'] ?></option>
                                    <option value="">-- Pilih Hak Akses --</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-puzzle-piece"></i>
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