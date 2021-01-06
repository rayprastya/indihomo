<div id="content" class="content">

  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
        </div>
        <div class="panel-body container">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
              <h3>List Langganan</h3>
            <thead>
              <tr>
                <!-- <th class="text-nowrap">NIP</th> -->
                <th class="text-nowrap">Order ID</th>
                <th class="text-nowrap">Invoice</th>
                <th class="text-nowrap">Tanggal</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT orderan.id as id, orderan.invoice as invoice, orderan.datecreate as tanggal, orderan.id_user as user, produk.nama_produk as nama FROM (
                    orderan INNER JOIN produk ON orderan.id_barang  = produk.id) ORDER BY id ASC", 0);
                while($row = $data->fetch_assoc()) {
                    if($_SESSION['id_user'] == $row['user']){
            ?>
              <tr>                
                <td><?= $row['id'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id'] ?></td>
                <td><?= $row['invoice'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['invoice'] ?></td>
                <td><?= $row['tanggal'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['tanggal'] ?></td>

              </tr>
              <!-- DETAILS -->
              <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
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
                        <label class="col-lg-4 col-form-label">ID ORDER</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" value="<?= $row['id'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Invoice</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_user" value="<?= $row['invoice'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Tanggal</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email_user" value="<?= $row['tanggal'] ?>"/>
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
                        <label class="col-lg-4 col-form-label">user</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nomorhp_user" value="<?= $row['user'] ?>"/>
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END DETAILS -->
            <?php }} ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>