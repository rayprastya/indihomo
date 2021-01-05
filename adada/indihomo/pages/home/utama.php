
<main id="main">

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients clients">
  <div class="container">

	<div class="row">

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in">
	  </div>

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
	  </div>

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
	  </div>

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
	  </div>

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
	  </div>

	  <div class="col-lg-2 col-md-4 col-6">
		<img src="assets/img/clients/ow.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
	  </div>

	</div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

	<div class="section-title" data-aos="fade-up">
	  <h2>About Us</h2>
	</div>

	<div class="row content">
	  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
		<p>
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
		  magna aliqua.
		</p>
		<ul>
		  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
		  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
		  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
		</ul>
	  </div>
	  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
		<p>
		  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
		  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
		  culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<a href="#" class="btn-learn-more">Learn More</a>
	  </div>
	</div>

  </div>
</section><!-- End About Us Section -->

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
              <h4 class="title"><a href=""><?= $row['kuota'] ?></a></h4>
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
                <h5 class="card-title"><a href="">Lobira Duno</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Limere Radses</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Nive Lodo</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Pale Treda</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End More Services Section -->

    <!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

	<div class="section-title" data-aos="fade-up">
	  <h2>About Us</h2>
	</div>

	<div class="row content">
	  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
		<p>
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
		  magna aliqua.
		</p>
		<ul>
		  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
		  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
		  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
		</ul>
	  </div>
	  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
		<p>
		  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
		  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
		  culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<a href="#" class="btn-learn-more">Learn More</a>
	  </div>
	</div>

  </div>
</section><!-- End About Us Section -->

    <!-- Carouselll -->
  <section id="carousel" class="carousel">
  <div class="container">
  <div class="carousel slide" data-ride="carousel" data-aos="fade-up" data-aos-delay="200">
    <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

    <div class="gambar_paketpromo">
    <!-- The slideshow --> 
        <div class="carousel-inner">
           <div class="carousel-item active">
              <img src="assets/img/more-services-1.jpg" alt="Los Angeles" style="width:100%; height:400px;" >
            </div>
            <div class="carousel-item">
               <img src="assets/img/more-services-2.jpg" alt="Chicago" style="width:100%; height:400px;">
            </div>
            <div class="carousel-item">
              <img src="assets/img/more-services-3.jpg" alt="New York" style="width:100%; height:400px;">
            </div>
    </div>
            <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
      </a>
</div>
</div>
</section>
<!-- </div> -->
<!-- FAQ -->
<section id="qa" class="qa">
  <div class="container">
    <div id="accordion">
      <div class="section-title" data-aos="fade-up">
          <h2>Question & Answer</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
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
    <div class="content">
      <a href="indexx.php?m=bantuan&s=bantuan" class="btn-learn-more">Pertanyaan Lainnya</a>
    </div>
  </div>
</section>


<section>
<div class="container my-4">

<p class="font-weight-bold">Bootstrap carousel multiple items is an improved version of the standard bootstrap
  carousel which allows you to put inside more than one element.</p>

<p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our <a href="https://mdbootstrap.com/docs/jquery/javascript/carousel/"
      target="_blank">Bootstrap Carousel Docs</a>.</p>

<hr class="my-4">

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>

</section>