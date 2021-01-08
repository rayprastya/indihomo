<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Keluhan</a></li>
  </ol>
  <h1 class="page-header">Laporan Keluhan</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a target="_blank" class="btn btn-icon btn-sm btn-inverse"><i class="fa fa-plus-square"></i></a>
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <!-- <th class="text-nowrap">NIP</th> -->
                <th class="text-nowrap">Nomor User</th>
                <th class="text-nowrap">Nama User</th>
                <th class="text-nowrap">Email User</th>
                <th class="text-nowrap">Alamat</th>
                <th class="text-nowrap">Nomor HP</th>
                <th class="text-nowrap">Keluhan</th>
                <th class="text-nowrap">Jawaban</th>
                <th class="text-nowrap">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM keluhan ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <td><?= $row['id_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id_user'] ?></td>
                <td><?= $row['nama_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_user'] ?></td>
                <td><?= $row['email_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['email_user'] ?></td>
                <td><?= $row['alamat'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['alamat'] ?></td>
                <td><?= $row['hp_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['hp_user'] ?></td>
                <td><?= $row['keluhan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['keluhan'] ?></td>
                <td><?= $row['jawaban'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['jawaban'] ?></td>
                <td>  
                    <a href="index.php?m=keluhan&s=keluhan_jawab&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                </td>
              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <label class="modal-title">Details Data FAQ</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <hr>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Question</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="question" value="<?= $row['question'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Answer</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="answer" value="<?= $row['answer'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
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