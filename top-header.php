<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="indexx.php"><span>Indihome</span></a></h1>
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
          <li><a href="indexx.php?m=bantuan&s=gangguan">Lapor Gangguan</a></li>
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

   <!-- Modal Login -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius:25px; width:450px; height:370px;">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login Indihome</h5>
              <button type="button " class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
<!-- Modal Content -->
        <div class="login-body">
          <div class="login-content">
            <form action="logedin.php" method="POST" class="margin-bottom-0" style="padding:20px;">
              <div class="form-group m-b-20">
                <input type="text" class="form-control form-control-lg inverse-mode" name="username" placeholder="username" style="font-size: 15px;" required />
              </div>
              <div class="form-group m-b-20">
                  <input type="password" class="form-control form-control-lg inverse-mode" name="password" placeholder="password" style="font-size: 15px;" required />
                </div>
                <div class="login-buttons">
                  <button type="submit" class="btn btn-block btn-lg" style="background: #3498db; color: #fff;"><h5>Login</h5></button>
                  <br>
                  <font face="Helvetica" size="3">
                    Belum punya akun?  
                    <a href="javascript:;" data-toggle="modal" data-dismiss="modal" data-target="#register" style="color:red;">Register disini</a>
                  </font>
                </div>
              </form>
            </div>
          </div>
<!-- Modal Content  -->
        </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal Login -->
<!-- Modal Register  -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius:10px;">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
              <button type="button " class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
<!-- Modal Content -->
        <div class="login-body">
          <div class="login-content">
            <form class="form-horizontal form-bordered" action="pages/user/user_proses.php?aksi=daftar" method="POST">
                        <font size="2" face="Helvetica">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">Username</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" placeholder="Nama User..." style="font-size: 15px;" required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">Nama Lengkap</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Nama Lengkap..." style="font-size: 15px;" required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="password..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">Jenis Kelamin</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <select class="form-control" name="jk_user" required>
                                        <option value="" style="font-size: 15px;">-- Pilih Jenis Kelamin --</option>
                                        <option value="Pria" style="font-size: 15px;">Pria</option>
                                        <option value="Wanita" style="font-size: 15px;">Wanita</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <i class="fa fa-mercury"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">E-Mail</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email_user" placeholder="E-Mail..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-at"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" style="font-size: 15px;">Nomor Telepon</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nomorhp_user" placeholder="Nomor Telepon..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary" style="background: #3498db; color: #fff;">Simpan Data</button>
                                </div>
                            </div>   
                        </div>
                      </font>
                    </form>
            </div>
            </div>
<!-- Modal Content  -->
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Register  -->
<!-- end modal --> 
