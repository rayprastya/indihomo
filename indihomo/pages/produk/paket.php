<div id="content" class="content">
<div class="container">
    <?php 
                $data = $db->query("SELECT produk.id as id, produk.kode_produk as kode_produk, produk.nama_produk as nama_produk, produk.keterangan as keterangan, produk.harga as harga, produk.telepon as telepon, produk.internet as internet, produk.paket as paket, tv_paket.nama_tvpaket as tv FROM (
                    produk INNER JOIN tv_paket ON produk.tv = tv_paket.id_tvpaket ) ORDER BY id ASC", 0);
                while($row = $data->fetch_assoc()) {
    ?>

    <div class="card border-2 bg-light text-dark mb-3 overflow-hidden"> 
        <div class="card-body">
          <h4><?= $row['nama_produk'] ?></h4>
          <br>
            <div class="row">
                      <div class="col-sm-3" style="">
                        <div>
                          <h8>Kode Produk <?= $row['kode_produk'] ?></h8>
                          <h6><?= $row['keterangan'] ?></h6>
                        </div>
                      </div>
                      <div class="col-sm-3">
                          <h6>Telepon</h6>
                          <h8>Menit gratis</h8>
                          <h6><?= $row['telepon'] ?> Menit</h6>
                      </div>
                      <div class="col-sm-3">
                          <h6>Internet</h6>
                          <h6>Bonus Data</h6>
                          <h6>Up To <?= $row['internet'] ?></</h6>
                       </div>
                       <div class="col-sm-3">
                          <h6>TV</h6>
                          <h6>Bonus Channel</h6>
                          <h6><?= $row['tv'] ?></h6>
                       </div>
                       <br>
                      <div class="col-sm-12" style="">
                          <p>Rp.<?= $row['harga'] ?>-</p>
                          <a href="indexx.php?m=produk&s=beli&id=<?= $row['id'] ?>" class="btn btn-primary">Beli Produk</a>
                      </div>
                  </div>
                  
              </div>
              
            </div>
            <?php } ?>
        </div>
        </div>
    </div>  