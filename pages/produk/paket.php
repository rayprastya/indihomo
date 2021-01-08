<div id="content" class="content">
<div class="container">
<h5>Berikut Paket Paket Yang Kami Sediakan</h5>
<br>
    <?php 
                $data = $db->query("SELECT produk.id as id, produk.kode_produk as kode_produk, produk.nama_produk as nama_produk, produk.keterangan as keterangan, produk.harga as harga, produk.telepon as telepon, produk.internet as internet, produk.paket as paket, tv_paket.nama_tvpaket as tv FROM (
                    produk INNER JOIN tv_paket ON produk.tv = tv_paket.id_tvpaket ) ORDER BY id ASC", 0);
                while($row = $data->fetch_assoc()) {
    ?>

    

    <div class="card border-5 shadow-sm text-dark mb-3 overflow-hidden"> 
        <div class="card-body">
          <h4>Paket <?= $row['nama_produk'] ?></h4>
          <hr>
          <br>
          <?php if (empty($_SESSION['role'])){ ?>
            <div class="row">
                      <div class="col-sm-3 border-right" style="">
                        <div>
                          <h8>Kode Produk : <?= $row['kode_produk'] ?></h8>
                          <hr>
                          <h6><?= $row['keterangan'] ?></h6>
                        </div>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Telepon</h6>
                          <hr>
                          <h8>Menit gratis</h8>
                          <h6><?= $row['telepon'] ?> Menit</h6>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Internet</h6>
                          <hr>
                          <h6>Bonus Data</h6>
                          <h6>Up To <?= $row['internet'] ?></</h6>
                       </div>
                       <div class="col-sm-3">
                          <h6>TV</h6>
                          <hr>
                          <h6>Bonus Channel</h6>
                          <h6><?= $row['tv'] ?></h6>
                       </div>
                       <br>
                      <div class="col-sm-12" style="">
                          <p>Harga Rp.<?= $row['harga'] ?>-</p>
                          <hr>
                      </div>
                  </div>
                  
              </div>
              
            </div>



          <?php } else { ?>
            <div class="row">
                      <div class="col-sm-3 border-right" style="">
                        <div>
                          <h8>Kode Produk : <?= $row['kode_produk'] ?></h8>
                          <hr>
                          <h6><?= $row['keterangan'] ?></h6>
                        </div>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Telepon</h6>
                          <hr>
                          <h8>Menit gratis</h8>
                          <h6><?= $row['telepon'] ?> Menit</h6>
                      </div>
                      <div class="col-sm-3 border-right">
                          <h6>Internet</h6>
                          <hr>
                          <h6>Bonus Data</h6>
                          <h6>Up To <?= $row['internet'] ?></</h6>
                       </div>
                       <div class="col-sm-3">
                          <h6>TV</h6>
                          <hr>
                          <h6>Bonus Channel</h6>
                          <h6><?= $row['tv'] ?></h6>
                       </div>
                       <br>
                      <div class="col-sm-12" style="">
                          <p>Harga Rp.<?= $row['harga'] ?>-</p>
                          <hr>
                          <a href="indexx.php?m=produk&s=beli&id=<?= $row['id'] ?>" class="beli">Beli Produk</a>
                      </div>
                  </div>
                  
              </div>
              
            </div>
            <?php }} ?>
        </div>
        </div>
    </div>  
    <style>
    .beli{
  background: #3498db;
  width: 50%;
  color: #fff;
  border-radius: 50px;
  border:none;
  margin: 0 0 0 30px;
  padding: 10px 25px;
    }
    .beli:hover{
  background: #57aae1;
  color: #fff;
    }
</style>