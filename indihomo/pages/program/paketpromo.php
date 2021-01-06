<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>PROMO</h2>
          <p>Temukan Promo dan Penawaran Menarik</p>
        </div>
      <?php 
                $data = $db->query("SELECT produk.id as id, produk.kode_produk as kode_produk, produk.nama_produk as nama_produk, produk.keterangan as keterangan, produk.harga as harga, produk.telepon as telepon, produk.internet as internet, produk.paket as paket, tv_paket.nama_tvpaket as tv FROM (
                    produk INNER JOIN tv_paket ON produk.tv = tv_paket.id_tvpaket ) ORDER BY id ASC", 0);
                $row = $data->fetch_assoc()
    ?>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-Biasa" class="filter-active">Biasa</li>
              <li data-filter=".filter-Promo" class="filter-active">Promo</li>
              <li data-filter=".filter-Lainnya" class="filter-active">Lainnya</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
        <?php while($row = $data->fetch_assoc()) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $row['paket']?>">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/biru.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $row['nama_produk']?></h4>
                <p><?= $row['keterangan']?></p>
                <div class="portfolio-links">
                  <a href="indexx.php?m=produk&s=paket" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->