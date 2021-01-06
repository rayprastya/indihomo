<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Data Produk</a></li>
        <li class="breadcrumb-item active">Tambah Data Produk</li>
    </ol>
    <h1 class="page-header">Tambah Data Produk</h1>
    <a href="index.php?m=barang&s=kelolaproduk">
        <span type="button" class="btn btn-inverse">
        <i class="fa fa-arrow-alt-circle-left"></i> Kembali
        </span>
    </a>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Isi Data Produk</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" action="pages/barang/barang_proses.php?aksi=insert" method="POST">
                        >
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Kode Produk</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kodeproduk" placeholder="Kode Produk..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Produk</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="namaproduk" placeholder="Nama Produk..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Tempat Lahir</label>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <label class="col-lg-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Agama</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="agama" required>
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
                        <!-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Status Pernikahan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="status_pernikahan" required>
                                        <option value="">-- Pilih Status Pernikahan --</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Status Pegawai</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="status_pegawai" required>
                                        <option value="">-- Pilih Status Pegawai --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Cuti">Cuti</option>
                                        <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                        <option value="Dikeluarkan">Dikeluarkan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <i class="fa fa-clipboard"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Jabatan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-industry"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Keterangan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Alamat</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Tinggal..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Harga</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="harga" placeholder="Harga..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Telepon</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="telepon" placeholder="Telepon..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Internet</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="internet" placeholder="Internet..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Tv</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tv" placeholder="Tv group..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Paket</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="paket" required>
                                        <option value="">-- Pilih Paket --</option>
                                        <option value="Biasa">Biasa</option>
                                        <option value="Promo">Promo</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <i class="fa fa-gem"></i>
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