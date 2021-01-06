<?php
include '../../db/db.php';
// require('fpdf17/fpdf.php');

$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    
    $insert = $db->query('INSERT INTO produk 
                        (kode_produk,nama_produk,keterangan,harga) 
                        VALUES 
                        ("'.$kodeproduk.'","'.$namaproduk.'","'.$keterangan.'","'.$harga.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../indexx.php?m=produk&s=paket"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    
    $update = $db->query('UPDATE produk SET kode_produk="'.$kodeproduk.'",
                                            nama_produk="'.$namaproduk.'",
                                            keterangan="'.$keterangan.'",
                                            harga="'.$harga.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

}else if ($aksi == 'beli') {
    $id = $_GET['id']; // id barang
    $iduser = $_POST['iduser']; // iduser
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorhp'];
    $hari = $_POST['hari']; // tanggal pembelian
    $invoice = rand(10000,99999); // masuk nomor invoice
    
    $beli = $db->query('INSERT INTO orderan
                    (invoice,datecreate,id_user,id_barang) 
                    VALUES 
                    ("'.$invoice.'","'.$hari.'","'.$iduser.'","'.$id.'")');

    if ($beli) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../indexx.php?m=produk&s=paket"</script>';
    } else {
        echo '<script>alert("Pembelian Gagal");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM produk WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
} else if ($aksi == 'update_password') {
    $id = $_GET['id_user'];
    $password = md5($_POST['password']);
    
    $change = $db->query('UPDATE user SET password="'.$password.'" WHERE id="'.$id.'"');

    if ($change) {
        echo '<script>alert("Password berhasil diganti");location.href = "../../index.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Password gagal diganti");history.go(-1)</script>';
    }
}




