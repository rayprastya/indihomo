<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
      <?php 
                $data = $db->query("SELECT * FROM tb_indihome WHERE stat='aktif'");
                while($row = $data->fetch_assoc()) {
        ?>
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"><?= $row['judul'] ?></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><?= $row['isi'] ?></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
        <?php } ?>
      </div>
    </div>

  </section>