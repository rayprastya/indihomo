<div id="content" class="content">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
	</ol>
	<h1 class="page-header mb-3">Dashboard</h1>
	<div class="row">
		<?php
		$t_pasien = $db->query('SELECT COUNT(no_rm) AS total_pasien FROM tb_soap GROUP BY no_rm');
		$pow = $t_pasien->fetch_assoc();
		// $p_pasien = $db->query('SELECT COUNT(*) AS total_pasien_p FROM tb_soap WHERE jenis_kelamin="Pria"');
		// $pow2 = $p_pasien->fetch_assoc();
		// $w_pasien = $db->query('SELECT COUNT(*) AS total_pasien_w FROM tb_soap WHERE jenis_kelamin="Wanita"');
		// $pow3 = $w_pasien->fetch_assoc();
		?>
		<div class="col-xl-6">
			<div class="card border-0 bg-dark text-white mb-3 overflow-hidden">
				<div class="card-body">
					<div class="row">
						<div class="col-xl-7 col-lg-8">
							<div class="mb-3 text-grey">
								<b>TOTAL USER</b>
								<span class="ml-2">
									<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
								</span>
							</div>
							<div class="d-flex mb-1">
								<h2 class="mb-0"><span data-animation="number" data-value="<?php echo $pow['total_pasien']; ?>">0.00</span></h2>
								<div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
							</div>
							<hr class="bg-white-transparent-2" />
							<div class="row text-truncate">
								<div class="col-6">
									<div class="f-s-12 text-grey">-</div>
									<div class="f-s-18 m-b-5 f-w-600 p-b-1">-<span data-animation="number" data-value="-">0.00</span></div>
									<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
										<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
									</div>
								</div>
								<div class="col-6">
									<div class="f-s-12 text-grey">-</div>
									<div class="f-s-18 m-b-5 f-w-600 p-b-1">-<span data-animation="number" data-value="-">0.00</span></div>
									<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
										<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
							<img src="assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		$t_dokter = $db->query('SELECT COUNT(*) AS total_dokter FROM tb_user WHERE jabatan="Dokter"');
		$row = $t_dokter->fetch_assoc();
		$p_dokter = $db->query('SELECT COUNT(*) AS total_dokter_p FROM tb_user WHERE jenis_kelamin="Pria"');
		$row2 = $p_dokter->fetch_assoc();
		$w_dokter = $db->query('SELECT COUNT(*) AS total_dokter_w FROM tb_user WHERE jenis_kelamin="Wanita"');
		$row3 = $w_dokter->fetch_assoc();
		?>
		<div class="col-xl-6">
			<div class="row">
				<div class="col-sm-12">
					<div class="card border-0 bg-dark text-white text-truncate mb-3">
						<div class="card-body">
							<div class="mb-3 text-grey">
								<b class="mb-3">TOTAL DOKTER</b> 
								<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
							</div>
							<div class="d-flex align-items-center mb-1">
								<h2 class="text-white mb-0"><span data-animation="number" data-value="<?php echo $row['total_dokter']; ?>">0.00</span></h2>
								<div class="ml-auto">
									<div id="conversion-rate-sparkline"></div>
								</div>
							</div>
							<hr>
							<div class="d-flex mb-2">
								<div class="d-flex align-items-center">
									<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
									Laki-Laki
								</div>
								<div class="d-flex align-items-center ml-auto">
									<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="<?php echo $row2['total_dokter_p']; ?>">0.00</span></div>
								</div>
							</div>
							<div class="d-flex mb-2">
								<div class="d-flex align-items-center">
									<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
									Perempuan
								</div>
								<div class="d-flex align-items-center ml-auto">
									<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="<?php echo $row3['total_dokter_w']; ?>">0.00</span></div>
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
                <th class="text-nowrap" rowspan="2">Tanggal Jaga</th>
                <th class="text-nowrap" rowspan="2">No RM</th>
                <th class="text-nowrap" rowspan="2">Nama Pasien</th>
                <th class="text-nowrap" rowspan="2">Kelas</th>
                <th class="text-nowrap" rowspan="2">Dokter Jaga</th>
                <th class="text-nowrap" rowspan="2">DPJP</th>
                <th class="text-nowrap" colspan="4">SOAP</th>
                <th class="text-nowrap" rowspan="2">Keterangan</th>
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
                $data = $db->query("SELECT * FROM tb_soap ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
            ?>
              <tr>
                <!-- <td><?= $row['id'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['id'] ?></td> -->
                <td><?= $row['tgl_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['tgl_jaga'] ?></td>
                <td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?></td>
                <td><?= $row['nama_pasien'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_pasien'] ?></td>
                <td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                <td><?= $row['dokter_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['dokter_jaga'] ?></td>
                <td><?= $row['DPJP'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['DPJP'] ?></td>
                <td><?= $row['subject'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['subject'] ?></td>
                <td><?= $row['object'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['object'] ?></td>
                <td><?= $row['assesment'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['assesment'] ?></td>
                <td><?= $row['plan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['plan'] ?></td>
                <td><?= $row['keterangan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['keterangan'] ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>