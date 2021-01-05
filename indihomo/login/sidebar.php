<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <?php
                        if ($_SESSION['foto']==NULL) { ?>
                            <img src="assets/img/user/user-13.jpg" alt=""/>   
                        <?php }else{ ?>
                            <img src="<?php echo base_url().'assets/img/user/'. $_SESSION['foto'];?>" alt="" />   
                        <?php } ?>
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?php echo $_SESSION['nama_lengkap'];?>
                        <small>NIP: <?php echo $_SESSION['NIK'];?></small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Edit Profile</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php"><i class="fa fa-th-large"></i> <span>Dashboard</span></a>
            </li>
            <?php if ($_SESSION['role'] == 'admin') { ?>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'bodj' ? 'active' : '' ?>">
                <a href="index.php?m=bodj&s=bodj"><i class="fa fa-file"></i> <span>INPUT BODJ</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                <a href="index.php?m=user&s=user"><i class="fa fa-users"></i> <span>Data Dokter</span></a>
            </li>
            <li class="nav-header">Section Report</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'laporan' ? 'active' : '' ?>">
                <a href="index.php?m=laporan&s=laporan"><i class="fa fa-chart-pie"></i> <span>Laporan BODJ Pasien</span></a>
            </li>
            <?php } ?>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->