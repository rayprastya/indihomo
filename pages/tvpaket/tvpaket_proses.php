<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $id_tvpaket = $_POST['id_tvpaket'];
    $nama_tvpaket = $_POST['nama_tvpaket'];
    
    $insert = $db->query('INSERT INTO tv_paket 
                        (id_tvpaket,nama_tvpaket) 
                        VALUES 
                        ("'.$id_tvpaket.'","'.$nama_tvpaket.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=tvpaket&s=tvpaket"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $id_tvpaket = $_POST['id_tvpaket'];
    $nama_tvpaket = $_POST['nama_tvpaket'];
    
    $update = $db->query('UPDATE tv_paket SET nama_perusahaan="'.$id_tvpaket.'",
                                            logo_perusahaan="'.$nama_tvpaket.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=tvpaket&s=tvpaket"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tv_paket WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=tvpaket&s=tvpaket"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}