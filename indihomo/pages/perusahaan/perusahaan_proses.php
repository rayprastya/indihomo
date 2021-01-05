<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $nama = $_POST['namaperusahaan'];
    $logo = $_POST['logoperusahaan'];
    $alamat = $_POST['alamatperusahaan'];
    $nomor = $_POST['nomorperusahaan'];
    $email = $_POST['emailperusahaan'];
    
    $insert = $db->query('INSERT INTO perusahaan 
                        (nama_perusahaan,logo_perusahaan,alamat_perusahaan,nomor_telp,email_perusahaan) 
                        VALUES 
                        ("'.$nama.'","'.$logo.'","'.$alamat.'","'.$nomor.'","'.$email.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=perusahaan&s=perusahaan"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $nama = $_POST['namaperusahaan'];
    $logo = $_POST['logoperusahaan'];
    $alamat = $_POST['alamatperusahaan'];
    $nomor = $_POST['nomorperusahaan'];
    $email = $_POST['emailperusahaan'];
    
    $update = $db->query('UPDATE perusahaan SET nama_perusahaan="'.$nama.'",
                                            logo_perusahaan="'.$nama_lengkap.'",
                                            alamat_perusahaan="'.$alamat.'",
                                            nomor_telp="'.$nomor.'",
                                            email_perusahaan="'.$email.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=perusahaan&s=perusahaan"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM perusahaan WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=perusahaan&s=perusahaan"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}