<?php 
      session_start();
      include "db/db.php";
      include "head.php";
      include "top-header.php";
      include "jumbotron.php";

      if (empty($_GET['m']) and empty($_GET['s'])) {
          include "pages/home/utama.php";
      } else if ($_GET['m'] != "" and $_GET['s'] != "") {
        if (file_exists("pages/".$_GET['m']."/".$_GET['s'].".php")) {
          include "pages/".$_GET['m']."/".$_GET['s'].".php";
        } else {
          include "notfound.php";
        }
      }

      include "footer.php";
?>

