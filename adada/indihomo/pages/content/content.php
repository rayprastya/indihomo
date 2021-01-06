<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data content</a></li>
  </ol>
  <h1 class="page-header">Data content</h1>
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
                <th class="text-nowrap">Kuota</th>
                <th class="text-nowrap">Status</th>
                <th class="text-nowrap">Layanan Satu</th>
                <th class="text-nowrap">Layanan Dua</th>
                <th class="text-nowrap">Layanan Tiga</th>
                <th class="text-nowrap">Perangkat</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM content ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['kuota'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kuota'] ?></td>
                <td><?= $row['status'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['status'] ?></td>
                <td><?= $row['layanansatu'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['layanansatu'] ?></td>
                <td><?= $row['layanandua'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['layanandua'] ?></td>
                <td><?= $row['layanantiga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['layanantiga'] ?></td>
                <td><?= $row['perangkat'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['perangkat'] ?></td>
                
                <td>  
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=content&s=content_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data Content</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Kuota</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="kuota" value="<?= $row['kuota'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Status</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="status" value="<?= $row['status'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Layanan Satu</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="layanansatu" value="<?= $row['layanansatu'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Layanan Dua</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="layanandua" value="<?= $row['layanandua'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Layanan Tiga</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="email" class="form-control" name="layanantiga" value="<?= $row['layanantiga'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Perangkat</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="email" class="form-control" name="perangkat" value="<?= $row['perangkat'] ?>"/>
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