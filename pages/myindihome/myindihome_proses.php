<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $gambar = $_POST['gambar'];
    $isi = $_POST['isi'];
    $judul = $_POST['judul'];
    
    $insert = $db->query('INSERT INTO my_indihome 
                        (gambar,isi,judul) 
                        VALUES 
                        ("'.$gambar.'","'.$isi.'","'.$judul.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=myindihome&s=myindihome"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $gambar = $_POST['gambar'];
    $isi = $_POST['isi'];
    $judul = $_POST['judul'];
    
    $update = $db->query('UPDATE perusahaan SET gambar="'.$gambar.'",
                                            isi="'.$isi.'",
                                            judul="'.$judul.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=myindihome&s=myindihome"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM my_indihome WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=myindihome&s=myindihome"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}