<?php
$data2 = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'"');
$row2 = $data2->fetch_assoc()
?>
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">BODJ Rawat Inap</a></li>
        <li class="breadcrumb-item active">Laporan BODJ Rawat Inap</li>
    </ol>
    <h1 class="page-header">Laporan BODJ Rawat Inap</h1>
    <div align="center">
    <button class="btn btn-xs btn-dark">
    <hr>No. Rekam Medis: <?php echo $row2['no_rm'];?> 
    <br>Nama Pasien: <?php echo $row2['nama_pasien'];?>
    <hr> 
    </button>
    </div>
    <hr>
    <a href="index.php?m=laporan&s=laporan">
        <span type="button" class="btn btn-inverse">
        <i class="fa fa-arrow-alt-circle-left"></i> Kembali
        </span>
    </a>
    <hr>
    <div class="row">
        <?php 
            $data = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'" ORDER BY tgl_jaga DESC');
            while($row = $data->fetch_assoc()) {
        ?>        
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">BODJ Rawat Inap <button class="btn btn-xs btn-warning"><?php echo $row['tgl_jaga']; ?></button> Oleh Dokter <button class="btn btn-xs btn-warning"><?php echo $row['dokter_jaga']; ?></button></h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <div class="form-horizontal form-bordered">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Kelas</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kelas" value="<?php echo $row['kelas']; ?>" placeholder="Kelas..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">DPJP</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="DPJP" value="<?php echo $row['DPJP']; ?>" placeholder="DPJP..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>S</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Subject</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="subject" placeholder="Subject..." required><?php echo $row['subject']; ?></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>O</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Object</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="object" placeholder="Object..." required><?php echo $row['object']; ?></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>A</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Assesment</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="assesment" placeholder="Assesment..." required><?php echo $row['assesment']; ?></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>P</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Plan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="plan" placeholder="Plan..." required><?php echo $row['plan']; ?></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Keterangan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan..." required><?php echo $row['keterangan']; ?></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>