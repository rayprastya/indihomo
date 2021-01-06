<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VSPR Vessper | Login Page</title>
	<link rel="icon" type="image/png" href="assets/img/logo/ow.png">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
</head>
<style type="text/css">
	.lingkaran{
		width: 100px;
		height: 100px;
	}
</style>
<body class="pace-top">
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<div id="page-container" class="fade">
		<div class="login login-v1">
			<div class="login-container">
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>LOGIN</b> Vesperr
						<small>Indihome Dummy<br>&copy; <?php echo date('Y') ?></small>
					</div>
					<div class="icon">
						<!-- <i class="fa fa-lock"></i> -->
						<img src="assets/img/logo/ow.png" class="lingkaran">
					</div>
				</div>
				<div class="login-body">
                <div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Data User</a></li>
        <li class="breadcrumb-item active">Tambah Data User</li>
    </ol>
    <h1 class="page-header">Tambah Data User</h1>
    <a href="login">
        <span type="button" class="btn btn-inverse">
        <i class="fa fa-arrow-alt-circle-left"></i> Kembali
        </span>
    </a>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Isi Data User</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" action="pages/user/user_proses.php?aksi=daftar" method="POST">
                        >
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Username</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" placeholder="Nama User..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Lengkap</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Nama Lengkap..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="password..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="jk_user" required>
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
                            <label class="col-lg-4 col-form-label">E-Mail</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email_user" placeholder="E-Mail..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nomor Telepon</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nomorhp_user" placeholder="Nomor Telepon..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan Data</button>
                                </div>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
				</div>
			</div>
		</div>
  	</div>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
</body>
</html>
