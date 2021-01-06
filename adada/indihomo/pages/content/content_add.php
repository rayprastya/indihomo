<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Data content</a></li>
        <li class="breadcrumb-item active">Tambah Data content</li>
    </ol>
    <h1 class="page-header">Tambah Data content</h1>
    <a href="index.php?m=content&s=content">
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
                    <form class="form-horizontal form-bordered" action="pages/content/content_proses.php?aksi=insert" method="POST">
                        >
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">kuota</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kuota" placeholder="Kuota..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">status</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="status" placeholder="Status..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">layanan satu</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="layanansatu" placeholder="Layanan Satu..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">layanan dua</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="layanandua" placeholder="Layanan Dua..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">layanantiga</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="layanantiga" placeholder="Layanan Tiga..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">perangkat</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="perangkat" placeholder="Perangkat..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
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