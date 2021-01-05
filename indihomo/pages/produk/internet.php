<section id="about" class="about">
  <div class="container">

	<div class="section-title" data-aos="fade-up">
	  <h2>Internet</h2>
	</div>

	<div class="row content">
	  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
		<p>
    Menggunakan jaringan fiber optik yang tersebar di seluruh negeri, 
    IndiHome hadir dengan menawarkan pilihan kecepatan Internet hingga 300 Mbps. 
    Selain cepat, Internet IndiHome lebih stabil dan tahan terhadap cuaca. 
    Aktifitas seperti bekerja, belajar, 
    belanja online hingga bermain games di rumah jadi lebih praktis dan nyaman.
		</p>
		<!-- <a href="#" class="btn-learn-more">Berlangganan</a> -->

	  </div>
	  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
		
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kecepatan</th>
          <th scope="col">Perangkat</th>
        </tr>
      </thead>
      <?php 
                $data = $db->query("SELECT * FROM content ORDER BY id ASC", 0);
                while($row = $data->fetch_assoc()) {
        ?>
      <tbody>
        <tr>
          <th scope="row"><?= $row['id'] ?></th>
          <td><?= $row['kuota'] ?></td>
          <td><?= $row['perangkat'] ?> Perangkat</td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
	  </div>
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
                $data = $db->query("SELECT * FROM content ORDER BY id DESC", 0);
                while($row = $data->fetch_assoc()) {
        ?>
          <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Up To <?= $row['kuota'] ?></a></h4>
              <p class="description"><?= $row['status'] ?></p>
              <p class="description">_____________________</p>
              <p class="description"><?= $row['layanansatu'] ?></p>
              <p class="description"><?= $row['layanandua'] ?></p>
              <p class="description"><?= $row['layanantiga'] ?></p>
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