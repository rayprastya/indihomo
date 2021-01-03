<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data Dokter</a></li>
  </ol>
  <h1 class="page-header">Data Dokter</h1>
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
          <p>Silahkan input <b>Data Dokter</b> Pada Button icon "<i class="fa fa-plus-square"></i>"</p>
        </div>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <th class="text-nowrap">NIP</th>
                <th class="text-nowrap">Nama Lengkap</th>
                <th class="text-nowrap">Jabatan</th>
                <th class="text-nowrap">Status Pegawai</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM tb_user ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['NIK'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['NIK'] ?></td>
                <td><?= $row['nama_lengkap'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_lengkap'] ?></td>
                <td><?= $row['jabatan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['jabatan'] ?></td>
                <td><?= $row['status_pegawai'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['status_pegawai'] ?></td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=user&s=user_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a href="index.php?m=user&s=user_password&id=<?= $row['id'] ?>" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i></a>
                    <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data Dokter</label>
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
                        <label class="col-lg-4 col-form-label">NIP</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="NIK" value="<?= $row['NIK'] ?>"/>
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
                                <input type="text" class="form-control" name="nama_lengkap" value="<?= $row['nama_lengkap'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Tempat Lahir</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                        <label class="col-lg-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Agama</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="agama" required>
                                    <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
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
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="<?= $row['jenis_kelamin'] ?>"><?= $row['jenis_kelamin'] ?></option>
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
                        <label class="col-lg-4 col-form-label">Status Pernikahan</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="status_pernikahan" required>
                                    <option value="<?= $row['status_pernikahan'] ?>"><?= $row['status_pernikahan'] ?></option>
                                    <option value="">-- Pilih Status Pernikahan --</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-adjust"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Status Pegawai</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select class="form-control" name="status_pegawai" required>
                                    <option value="<?= $row['status_pegawai'] ?>"><?= $row['status_pegawai'] ?></option>
                                    <option value="">-- Pilih Status Pegawai --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                    <option value="Dikeluarkan">Dikeluarkan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-clipboard"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Jabatan</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-industry"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">E-Mail</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-at"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Alamat</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <textarea type="text" class="form-control" name="alamat"><?= $row['alamat'] ?></textarea>
                                <div class="input-group-addon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Nomor Telepon</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="telepon" value="<?= $row['telepon'] ?>"/>
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
      location.href = "pages/user/user_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>