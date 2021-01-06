<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Data Orderan</a></li>
  </ol>
  <h1 class="page-header">Data Orderan</h1>
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
                <th class="text-nowrap">Invoice</th>
                <th class="text-nowrap">Date Create</th>
                <th class="text-nowrap">ID User</th>
                <th class="text-nowrap">ID Barang</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM orderan ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['invoice'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['invoice'] ?></td>
                <td><?= $row['datecreate'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['datecreate'] ?></td>
                <td><?= $row['id_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id_user'] ?></td>
                <td><?= $row['id_barang'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id_barang'] ?></td>
                
                <td>  
                    <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                    <a href="index.php?m=orderan&s=orderan_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                    <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data Orderan</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Invoice</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="invoice" value="<?= $row['invoice'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Data Create</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="datecreate" value="<?= $row['datecreate'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">ID User</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="id_user" value="<?= $row['id_user'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">ID Barang</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="id_barang" value="<?= $row['id_barang'] ?>"/>
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