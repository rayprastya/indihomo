<?php
$conn = mysqli_connect('localhost','root','','indihome');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    select invoice
    <form action="invoice-db.php" method="get">
    <select name="kode_produk" >
    <?php
    $query = mysqli_query($conn,"SELECT * FROM produk");
    while($invoice=mysqli_fetch_array($query)){
        echo"<option value='".$invoice['kode_produk']."'>".$invoice['kode_produk']."</option>";
    }
    ?>
    </select>
    <input type="submit" value="Generate">
    </form>
</body>
</html>