<?php
$data = $db->query('SELECT * FROM produk WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div id="content" class="content container">
    
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Rincian Produk</h4>
                    <div class="panel-heading-btn">
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" action="pages/produk/barang_proses.php?aksi=beli&id=<?= $_GET['id'] ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Kode Produk</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kodeproduk" value="<?= $row['kode_produk'] ?>" readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Produk</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="namaproduk" value="<?= $row['nama_produk'] ?>" readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Keterangan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan'] ?>" readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Harga</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="harga" value="<?= $row['harga'] ?>" readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Paket</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="harga" value="<?= $row['paket'] ?>" readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'];?>">
                        <input type="hidden" name="user" value="<?php echo $_SESSION['nama_user'];?>">
                        <input type="hidden" name="email" value="<?php echo $_SESSION['email_user'];?>">
                        <input type="hidden" name="nomorhp" value="<?php echo $_SESSION['nomorhp_user'];?>">
                        <input type="hidden" name="hari" value="<?php echo date('Y/m/d') ?>">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Beli Barang</button>
                                </div>
                            </div>   
                        </div>
                    </form>
                    <!--  -->
                    <form type="hidden" class="form-horizontal form-bordered" action="pages/produk/invoice.php" method="POST">
                        <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'];?>">
                        <input type="hidden" name="user" value="<?php echo $_SESSION['nama_user'];?>">
                        <input type="hidden" name="email" value="<?php echo $_SESSION['email_user'];?>">
                        <input type="hidden" name="nomorhp" value="<?php echo $_SESSION['nomorhp_user'];?>">
                        <input type="hidden" name="hari" value="<?php echo date('Y/m/d') ?>">
                        <input type="hidden" name="harga" value="<?= $row['harga'] ?>">
                        <input type="hidden" name="keterangan" value="<?= $row['keterangan'] ?>">
                        <input type="hidden" name="namaproduk" value="<?= $row['nama_produk'] ?>">
                        <input type="hidden" name="kodeproduk" value="<?= $row['kode_produk'] ?>">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Cetak Invoice</button>
                                </div>
                            </div>   
                        </div>
                    </form>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>