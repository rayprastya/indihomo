<section id="about" class="about">
  <div class="container">

	<div class="section-title" data-aos="fade-up">
	  <h2>TV</h2>
	</div>
  <?php 
                $data = $db->query("SELECT * FROM tv_content WHERE status='aktif'");
                while($row = $data->fetch_assoc()) {
    ?>
	<div class="row content">
	  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
		<p>
    <?= $row['deskripsi_tv']?>
		</p>
		<!-- <a href="#" class="btn-learn-more">Berlangganan</a> -->

	  </div>
    <?php } ?>
	  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300"> 
	</div>

  </div>
</section>

<section id="services" class="services">
      <div class="container">
      
        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>Beragam pilihan kecepatan layanan internet sesuai dengan kebutuhan Anda</p>
        </div>
        <div class="row">
        <?php 
                $data = $db->query("SELECT * FROM tv_content ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
        ?>
          <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?= $row['nama_tv'] ?></a></h4>
              <p class="description">_____________________</p>
              <p class="description"><?= $row['layanan_tv'] ?> Gratis <br>selama berlangganan</p>
            </div>
          </div>
          <?php } ?>
        </div> 
        <section id="about" class="about">
          <div class="container">
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <a href="indexx.php?m=produk&s=paket" class="btn-learn-more">Cari Paket</a>
                </div>
            </div>
          </div>
       </section>  
      </div>
    </section>
  </main>