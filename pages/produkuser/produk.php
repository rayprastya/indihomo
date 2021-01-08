<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
    </ol>
    <br>
    <h4>Hai <?php echo $_SESSION['nama_user'];?></h4>
    <br>
    <h1>Plihan Produk</h1>
    <br>
    <br>

    <?php 
                $data = $db->query("SELECT * FROM produk ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
    ?>

    <div class="card border-0 bg-dark text-white mb-3 overflow-hidden"> 
        <div class="card-body">
          <h4><?= $row['nama_produk'] ?></h4>
          <br>
            <div class="row">
                      <div class="col-sm-4" style="">
                        <div>
                          <h8><?= $row['kode_produk'] ?></h8>
                          <h6><?= $row['keterangan'] ?></h6>
                        </div>
                      </div>
                      <div class="col-sm-4">
                          <h6>Telepon</h6>
                          <h8>Menit gratis</h8>
                          <h6>300 Menit</h6>
                      </div>
                      <div class="col-sm-4">
                          <h6>Free Indihome Study</h6>
                          <h6>Wifi.id</h6>
                          <h6>Cloud Storage 16GB</h6>
                       </div>
                       <br>
                      <div class="col-sm-12" style="">
                          <p>Rp.<?= $row['harga'] ?>-</p>
                          <a href="index.php?m=produkuser&s=beli&id=<?= $row['id'] ?>" class="btn btn-danger">Beli Produk</a>
                      </div>
                  </div>
                  
              </div>
              
            </div>
            <?php } ?>
        </div>
        
    </div>  