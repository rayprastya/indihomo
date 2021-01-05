<?php
    $data = $db->query('SELECT * FROM user WHERE id_user="'.$_GET['id_user'].'"');
    $row = $data->fetch_assoc()
?>
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Data User</a></li>
        <li class="breadcrumb-item active">Update Data User</li>
    </ol>
    <h1 class="page-header">Update Data User</h1>
    <a href="index.php?m=user&s=user">
        <span type="button" class="btn btn-inverse">
        <i class="fa fa-arrow-alt-circle-left"></i> Kembali
        </span>
    </a>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Ganti Password Login User</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" action="pages/user/user_proses.php?aksi=update_password&id=<?= $_GET['id'] ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">New Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="New Password..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Retype New Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"  placeholder="Retype New Password..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Change Password</button>
                                </div>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>