<div id="header" class="header navbar-default">
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>BODJ</b> | Rawat Inap</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="assets/img/user/user-13.jpg" alt="" />  -->
                <?php
                    if ($_SESSION['foto']==NULL) { ?>
                        <img src="assets/img/user/user-13.jpg" alt=""/>   
                <?php }else{ ?>
                        <img src="<?php echo base_url().'assets/img/user/'. $_SESSION['foto'];?>" alt="" />   
                <?php } ?>
                <span class="d-none d-md-inline"><?php echo $_SESSION['nama_lengkap'];?></span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <a href="javascript:;" class="dropdown-item">Calendar</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
</div>