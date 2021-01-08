<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $channel = $_POST['channel'];
    $paket_channel = $_POST['paket_channel'];

    $insert = $db->query('INSERT INTO tv_chn 
                        (channel,paket_channel) 
                        VALUES 
                        ("'.$channel.'","'.$paket_channel.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=tvchanel&s=tvchanel"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $channel = $_POST['channel'];
    $paket_channel = $_POST['paket_channel'];
    
    $update = $db->query('UPDATE tv_chn SET channel="'.$channel.'",
                                            paket_channel="'.$paket_channel.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=tvchanel&s=tvchanel"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tv_chn WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=tvchanel&s=tvchanel"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}