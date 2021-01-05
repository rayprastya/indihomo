<!DOCTYPE html>
<html>
<head>
    <title>contoh</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
<?php
   $host ="localhost";
   $user ="root";
   $paswd="";
   $db   ="db_soap";

   $koneksi= @mysqli_connect($host,$user,$paswd,$db);
   if(!$koneksi)
   {
    die(@mysqli_connect_error());
   }

   $hasil = @mysqli_query($koneksi,"select * from tb_log");

   while($row = @mysqli_fetch_array($hasil, MYSQLI_BOTH))
   {
  ?>
  <div class="body container" style="background-color:red; width:100%; height:500px;">
      <div class="content" style="background-color:white; width:200px; height:200px; float:right;">
         <p><h4><?php echo $row['log_user']; ?></h4></p>
         <p><h4><?php echo $row['log_remarks']; ?></h4></p>
      </div>
  </div>
  <?php
}
?>
</body>
</html>