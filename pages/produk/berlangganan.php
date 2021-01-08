<div id="content" class="content">
<div class="container">
<h5>Langgan Produk <?php echo $_SESSION['nama_user']?></h5>
<?php 
                $data = $db->query("SELECT orderan.id as id, orderan.invoice as invoice, orderan.datecreate as tanggal, orderan.id_user as user, produk.nama_produk as nama,
                produk.kode_produk as kode_produk, produk.nama_produk as nama_produk, produk.keterangan as keterangan, produk.harga as harga, produk.telepon as telepon,
                produk.internet as internet, produk.paket as paket
                 FROM (
                    orderan INNER JOIN produk ON orderan.id_barang  = produk.id) ORDER BY id ASC", 0);
                while($row = $data->fetch_assoc()) {
                    if($_SESSION['id_user'] == $row['user']){
            ?>
    <div class="card border-5 shadow-sm text-dark mb-3 overflow-hidden"> 
        <div class="card-body">
          <h4><?= $row['nama_produk'] ?></h4>
          <hr>
          <br>

            <div class="row">
                      <div class="col-sm-3 border-right" style="">
                        <div>
                          <h8>Kode Produk <?= $row['kode_produk'] ?></h8>
                          <h6><?= $row['keterangan'] ?></h6>
                        </div>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Telepon</h6>
                          <h8>Menit gratis</h8>
                          <h6><?= $row['telepon'] ?> Menit</h6>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Internet</h6>
                          <h6>Bonus Data</h6>
                          <h6>Up To <?= $row['internet'] ?></</h6>
                       </div>
                       <div class="col-sm-3">
                          <h6>TV</h6>
                          <h6>Bonus Channel</h6>
                       </div>
                       <br>
                      <div class="col-sm-12" style="">
                          <p>Harga Rp.<?= $row['harga'] ?>-</p>
                      </div>
                  </div>
                  
              </div>
              
            </div>
            <?php }} ?>
        </div>
        </div>
    </div>  