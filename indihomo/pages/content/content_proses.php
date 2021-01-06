<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $kuota = $_POST['kuota'];
    $status = $_POST['status'];
    $layanansatu = $_POST['layanansatu'];
    $layanandua = $_POST['layanandua'];
    $layanantiga = $_POST['layanantiga'];
    $perangkat = $_POST['perangkat'];
    
    $insert = $db->query('INSERT INTO content 
                        (kuota,status,layanansatu,layanandua,layanantiga,perangkat) 
                        VALUES 
                        ("'.$kuota.'","'.$status.'","'.$layanansatu.'","'.$layanandua.'","'.$layanantiga.'","'.$perangkat.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=content&s=content"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kuota = $_POST['kuota'];
    $status = $_POST['status'];
    $layanansatu = $_POST['layanansatu'];
    $layanandua = $_POST['layanandua'];
    $layanantiga = $_POST['layanantiga'];
    $perangkat = $_POST['perangkat'];
    
    $update = $db->query('UPDATE content SET kuota="'.$kuota.'",
                                            status="'.$status.'",
                                            layanansatu="'.$layanansatu.'",
                                            layanandua="'.$layanandua.'",
                                            layanantiga="'.$layanantiga.'",
                                            status="'.$status.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=content&s=content"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM content WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=content&s=content"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}