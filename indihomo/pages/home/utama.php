
<main id="main">


<!-- ======= Services Section ======= -->
  <section id="services" class="services">
      <div class="container">
      
        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>beberapa Layanan Yang Bisa Kamu Miliki</p>
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
      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Internet</a></h5>
                <p class="card-text">Akses internet broadband cepat hingga 300 Mbps.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/tv.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Tv</a></h5>
                <p class="card-text">Nikmati fitur menarik seperti Pause & Rewind, VoD dan lain-lain.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Telepon</a></h5>
                <p class="card-text">Bebas nelpon hingga 1000 menit sesuai pilihan paket.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End More Services Section -->

   
<!-- FAQ -->
<section id="qa" class="qa">
  <div class="container">
    <div id="accordion">
      <div class="section-title" data-aos="fade-up">
          <h2>Question & Answer</h2>
          <p>Pertanyaan Yang Biasa Ditanyakan</p>
      </div>
      <?php 
                $data = $db->query("SELECT * FROM faq LIMIT 0,3", 0);
                while($row = $data->fetch_assoc()) {
        ?>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?= $row['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $row['id'] ?>">
              <?= $row['question'] ?>
              </button>
            </h5>
          </div>

          <div id="collapse<?= $row['id'] ?>" class="collapse" aria-labelledby="heading<?= $row['id'] ?>" data-parent="#accordion">
            <div class="card-body">
            <?= $row['answer'] ?>
            </div>
          </div>
        </div>
        <?php } ?>

    </div>
    <div class="content" data-aos="fade-up" data-aos-delay="200">
      <a href="indexx.php?m=bantuan&s=bantuan" class="btn-learn-more">Pertanyaan Lainnya</a>
    </div>
  </div>
</section>


</div>

</section>