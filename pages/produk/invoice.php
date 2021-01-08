<?php
    $iduser = $_POST['iduser']; // iduser
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorhp'];
    $hari = $_POST['hari']; // tanggal pembelian
    $invoice = rand(10000,99999); // masuk nomor invoice
?>

<!-- CSS only -->
<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->

<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="assets/css/invoicestyle.css">


<div class="container" style="width:700px; margin-top:10px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">

                        <div class="col-md-6 text-left">
                            <p class="font-weight-bold mb-1">Invoice</p>
                            <p class="text-muted"><?php echo date('Y/m/d') ?></p>
                        </div>
                    </div>

                    <hr class="my-0">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Pembeli</p>
                            <p class="mb-1"><?php echo $user;?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Detail Pembayaran</p>
                            <p class="mb-1"><span class="text-muted">Name   : </span> <?php echo $user;?></p>
                            <p class="mb-1"><span class="text-muted">No. HP : </span> <?php echo $nomorhp;?></p>
                        </div>
                    </div>

                    <div class="row p-0">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-3 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-3 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-3 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-3 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-3 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><?php echo $kodeproduk;?></td>
                                        <td><?php echo $namaproduk;?></td>
                                        <td><?php echo $keterangan;?></td>
                                        <td>Rp.<?php echo $harga;?></td>
                                        <td>Rp.<?php echo $harga;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-primary p-2">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Total Final</div>
                            <div class="h2 font-weight-light"><strong>Rp.<?php echo $harga;?></strong></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" onclick="window.print()" style="margin-top:5px;">Cetak Invoice</button>
                </div>
            </div>
        </div>
    </div>

</div>


