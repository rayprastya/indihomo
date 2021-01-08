<div id="content" class="content">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
	</ol>
	<h1 class="page-header mb-3">Dashboard</h1>
	<div class="row">
		<?php
		$t_pasien = $db->query('SELECT COUNT(id_user) AS nomor_user FROM user GROUP BY id_user');
		$pow = $t_pasien->fetch_assoc();
		// $p_pasien = $db->query('SELECT COUNT(*) AS total_pasien_p FROM tb_soap WHERE jenis_kelamin="Pria"');
		// $pow2 = $p_pasien->fetch_assoc();
		// $w_pasien = $db->query('SELECT COUNT(*) AS total_pasien_w FROM tb_soap WHERE jenis_kelamin="Wanita"');
		// $pow3 = $w_pasien->fetch_assoc();
		?>
		
		<?php
		$p_dokter = $db->query('SELECT COUNT(*) AS total_user_p FROM user WHERE jk_user="Pria"');
		$row2 = $p_dokter->fetch_assoc();
		$w_dokter = $db->query('SELECT COUNT(*) AS total_user_w FROM user WHERE jk_user="Wanita"');
		$row3 = $w_dokter->fetch_assoc();
		?>
		<div class="col-xl-6">
			<div class="row">
				<div class="col-sm-12">
					<div class="card border-0 bg-dark text-white text-truncate mb-3">
						<div class="card-body">
							<div class="mb-3 text-grey">
								<b class="mb-3">TOTAL USER</b> 
								<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
							</div>
							<hr>
							<div class="d-flex mb-2">
								<div class="d-flex align-items-center">
									<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
									Laki-Laki
								</div>
								<div class="d-flex align-items-center ml-auto">
									<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="<?php echo $row2['total_user_p']; ?>">0.00</span></div>
								</div>
							</div>
							<div class="d-flex mb-2">
								<div class="d-flex align-items-center">
									<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
									Perempuan
								</div>
								<div class="d-flex align-items-center ml-auto">
									<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="<?php echo $row3['total_user_w']; ?>">0.00</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
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
              <tr align="center">
                <!-- <th class="text-nowrap" rowspan="2">No.</th> -->
                <th class="text-nowrap" rowspan="2">Nama</th>
                <th class="text-nowrap" rowspan="2">Email</th>
                <th class="text-nowrap" rowspan="2">Nomor HP</th>
				<th class="text-nowrap" rowspan="2">Jenis Kelamin</th>
				<th class="text-nowrap" rowspan="2">Role</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $data = $db->query("SELECT * FROM user ORDER BY id_user DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <!-- <td><?= $row['id_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id_user'] ?></td> -->
                <td><?= $row['nama_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_user'] ?></td>
                <td><?= $row['email_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['email_user'] ?></td>
				<td><?= $row['nomorhp_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nomorhp_user'] ?></td>
				<td><?= $row['nomorhp_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['jk_user'] ?></td>
				<td><?= $row['nomorhp_user'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['role'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>