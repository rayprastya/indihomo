<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Laporan Buku Operan Dokter Jaga Rawat Inap</a></li>
  </ol>
  <h1 class="page-header">Laporan Buku Operan Dokter Jaga Rawat Inap</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <!-- <a href="index.php?m=laporan&s=laporan_add" target="_blank" class="btn btn-icon btn-sm btn-inverse"><i class="fa fa-plus-square"></i></a> -->
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <!-- <div class="alert alert-warning fade show">
          <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          </button>
          <p>Silahkan input <b>Laporan Buku Operan Dokter Jaga Rawat Inap</b> Pada Button icon "<i class="fa fa-plus-square"></i>"</p>
        </div> -->
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr align="center">
                <!-- <th class="text-nowrap" rowspan="2">No.</th> -->
                <!-- <th class="text-nowrap" rowspan="2">Tanggal Jaga</th> -->
                <th class="text-nowrap" rowspan="2">No RM</th>
                <th class="text-nowrap" rowspan="2">Nama Pasien</th>
                <th class="text-nowrap" rowspan="2">Kelas</th>
                <th class="text-nowrap" rowspan="2">Dokter Jaga</th>
                <th class="text-nowrap" rowspan="2">DPJP</th>
                <th class="text-nowrap" colspan="4">SOAP</th>
                <th class="text-nowrap" rowspan="2">Keterangan</th>
                <th class="text-nowrap" rowspan="2">Total SOAP</th>
              </tr>
              <tr>
                <td class="text-nowrap">Subject</td>
                <td class="text-nowrap">Obejct</td>
                <td class="text-nowrap">Assesment</td>
                <td class="text-nowrap">Plan</td>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT tgl_jaga,no_rm,nama_pasien,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,COUNT(no_rm) AS total
                                    FROM tb_soap GROUP BY no_rm ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr align="center">
                <!-- <td><?= $row['id'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id'] ?></td> -->
                <!-- <td><?= $row['tgl_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['tgl_jaga'] ?></td> -->
                <td><a href="index.php?m=laporan&s=laporan_edit&no_rm=<?= $row['no_rm'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?></i></a></td>
                <td><?= $row['nama_pasien'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_pasien'] ?></td>
                <td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                <td><?= $row['dokter_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['dokter_jaga'] ?></td>
                <td><?= $row['DPJP'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['DPJP'] ?></td>
                <td><?= $row['subject'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['subject'] ?></td>
                <td><?= $row['object'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['object'] ?></td>
                <td><?= $row['assesment'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['assesment'] ?></td>
                <td><?= $row['plan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['plan'] ?></td>
                <td><?= $row['keterangan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['keterangan'] ?></td>
                <td><button class="btn btn-danger"><?= $row['total'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['total'] ?></button></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-10 -->
  </div>
</div>
<script>
  function deleteData(id) {
    var r = confirm("Anda yakin ingin menghapus ini");
    if (r == true) {
      location.href = "pages/laporan/laporan_proses.php?aksi=hapus&id=" + id;
    }
  }
</script>