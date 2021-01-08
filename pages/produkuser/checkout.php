<?php 
require 'connect.php';
require 'item.php';


$user = $_SESSION['nama_user'];
$insert = $db->query('INSERT INTO order 
                        (datecreation, status, username) 
                        VALUES 
                        ("New Order","'.date('Y-m-d').'",0,"'.$user.'")';

//Simpan pesanan baru
// mysqli_query($con, $sql1);
// $ordersid = mysqli_insert_id($con); 
$cart = unserialize(serialize($_SESSION['cart'])); //Set $cart sebagai array, serialize () mengubah string menjadi array
for($i=0; $i<count($cart);$i++) {

    $insert = $db->query('INSERT INTO orderlog 
                        (produkid, orderid, quantity, harga) 
                        VALUES 
                        ('.$cart[$i]->id.', '1', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';


    $sql2 = 'INSERT INTO oderdetail (productid, orderid, price, quantity) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';

}
//Menghapus semua produk dalam keranjang
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products.