<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $invoice = $_POST['invoice'];
    $datecreate = $_POST['datecreate'];
    $id_user = $_POST['id_user'];
    $id_barang = $_POST['id_barang'];
    
    $insert = $db->query('INSERT INTO orderan 
                        (invoice,datecreate,id_user,id_barang) 
                        VALUES 
                        ("'.$invoice.'","'.$datecreate.'","'.$id_user.'","'.$id_barang.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=orderan&s=orderan"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $invoice = $_POST['invoice'];
    $datecreate = $_POST['datecreate'];
    $id_user = $_POST['id_user'];
    $id_barang = $_POST['id_barang'];
    
    $update = $db->query('UPDATE orderan SET invoice="'.$invoice.'",
                                            datecreate="'.$datecreate.'",
                                            id_user="'.$id_user.'",
                                            id_barang="'.$id_barang.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=orderan&s=orderan"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM orderan WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=orderan&s=orderan"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}