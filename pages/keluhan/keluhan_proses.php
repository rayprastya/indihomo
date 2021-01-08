<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
 if ($aksi == 'update') {
    $id = $_GET['id'];
    $jawaban = $_POST['jawaban'];
    
    $update = $db->query('UPDATE keluhan SET jawaban="'.$jawaban.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=keluhan&s=keluhan"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM faq WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=faq&s=faq"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}