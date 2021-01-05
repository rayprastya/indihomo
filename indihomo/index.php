<?php 
  session_start();
  include "db/db.php";

  $url = $_SERVER['REQUEST_URI'];
  $get_api = explode('/', $url);

  if ($get_api[1] == 'api') {
    include $get_api[1] . '/' . $get_api[2] . '.php';
  } else {
    if (!empty($_SESSION['role'])) {
      include "pages/login/head.php";
      include "pages/login/top-header.php";
      include "pages/login/sidebar.php";
      include "pages/login/panel.php";

      if (empty($_GET['m']) and empty($_GET['s']) and ($_SESSION['role'] == 'admin')) {
          include "pages/homeuser/utama.php";
      } else if (empty($_GET['m']) and empty($_GET['s']) and ($_SESSION['role'] == 'user')){
        include "pages/homeuser/utamauser.php";
      }
      else if ($_GET['m'] != "" and $_GET['s'] != "") {
        if (file_exists("pages/".$_GET['m']."/".$_GET['s'].".php")) {
          include "pages/".$_GET['m']."/".$_GET['s'].".php";
        } else {
          include "notfound.php";
        }
      }

      include "pages/login/footer.php";
    } else {
      include "login.php";
    }
  }


?>

