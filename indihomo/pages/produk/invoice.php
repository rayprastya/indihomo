<?php
$data = $db->query('SELECT * FROM produk WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>

<!-- CSS only -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="assets/css/invoicestyle.css">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice</p>
                            <p class="text-muted"><?php echo date('Y/m/d') ?></p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Pembeli</p>
                            <p class="mb-1"><?php echo $_SESSION['nama_user'];?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Detail Pembayaran</p>
                            <p class="mb-1"><span class="text-muted">Name   : </span> <?php echo $_SESSION['nama_user'];?></p>
                            <p class="mb-1"><span class="text-muted">No. HP : </span> <?php echo $_SESSION['nomorhp_user'];?></p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $_GET['id'] ?></td>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td>Rp.<?= $row['harga'] ?></td>
                                        <td>Rp.<?= $row['harga'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Total Final</div>
                            <div class="h2 font-weight-light">Rp.<?= $row['harga'] ?></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" onclick="window.print()">Cetak Invoice</button>
                </div>
            </div>
        </div>
    </div>

</div>


