<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Indihome</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="indexx.php">Home</a></li>
          <li class="drop-down"><a href="">Produk</a>
            <ul>
              <li><a href="indexx.php?m=produk&s=internet">Internet</a></li>
              <li><a href="indexx.php?m=produk&s=tv">Tv</a></li>
              <li><a href="indexx.php?m=produk&s=internet">Telepon</a></li>
              <li><a href="indexx.php?m=produk&s=paket">Paket</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Program</a>
            <ul>
              <li><a href="indexx.php?m=program&s=paketpromo">Paket & Promo</a></li>
            </ul>
          </li>
          <li><a href="indexx.php?m=bantuan&s=bantuan">Bantuan</a></li>
          <?php if (empty($_SESSION['role'])){ ?>
          <li class="get-started">
            <a href="#login.php" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a>
          </li>
          <?php } else { ?>
          <?php if ($_SESSION['role'] == 'user'){ ?>
          <li><a href="indexx.php?m=bantuan&s=info">Info</a></li>
          <li class="get-started">
            <a href="indexx.php?m=produk&s=berlangganan">Berlangganan</a>
          </li> 
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline"><?php echo $_SESSION['nama_user'];?></span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <a href="javascript:;" class="dropdown-item">Calendar</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
          </li>
          <?php } ?>
          <?php if ($_SESSION['role'] == 'admin'){ ?>
          <li class="get-started">
            <a href="#about">Berlangganan</a>
          </li> 
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline"><?php echo $_SESSION['nama_user'];?></span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="index.php" class="dropdown-item">Admin Panel</a>
                <a href="javascript:;" class="dropdown-item">Calendar</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
          </li>
          <?php } } ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login Indihome</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!--  -->
                            <div class="login-body">
          <div class="login-content">
            <form action="logedin.php" method="POST" class="margin-bottom-0">
              <div class="form-group m-b-20">
                <input type="text" class="form-control form-control-lg inverse-mode" name="username" placeholder="username" required />
              </div>
              <div class="form-group m-b-20">
                <input type="password" class="form-control form-control-lg inverse-mode" name="password" placeholder="Password" required />
              </div>
              <div class="checkbox checkbox-css m-b-20">
                <input type="checkbox" id="remember_checkbox" /> 
                <label for="remember_checkbox">
                Remember Me
                </label>
              </div>
              <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                <br>
                <h4><a href="daftar.php">Register</a></h4>
              </div>
            </form>
          </div>
        </div>
                    <!--  -->
                  </div>
                  </form>
                </div>
              </div>
            </div>
          <!-- end modal -->