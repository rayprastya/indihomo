<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id_user = $_POST['iduser'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    
    $insert = $db->query('INSERT INTO ketersediaan 
                        (id_user,alamat,email) 
                        VALUES 
                        ("'.$id_user.'","'.$alamat.'","'.$email.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../indexx.php?m=home&s=utama"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE
} else if ($aksi == 'masuk') {
    $keluhan = $_POST['keluhan'];
    $alamat = $_POST['alamat'];
    $iduser = $_POST['iduser'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    
    $insert = $db->query('INSERT INTO keluhan 
                        (id_user,nama_user,email_user,alamat,hp_user,keluhan) 
                        VALUES 
                        ("'.$iduser.'","'.$nama.'","'.$email.'","'.$alamat.'","'.$hp.'","'.$keluhan.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../indexx.php?m=home&s=utama"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE
}  else if ($aksi == 'update') {
    $id = $_GET['id'];
    $no_rm = $_POST['no_rm'];
    $nama_pasien = $_POST['nama_pasien'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    // $status_pasien = $_POST['status_pasien'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    // $berkas = $_POST['berkas'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
                                            nama_pasien="'.$nama_pasien.'",
                                            kelas="'.$kelas.'",
                                            dokter_jaga="'.$dokter_jaga.'",
                                            DPJP="'.$DPJP.'",
                                            subject="'.$subject.'",
                                            object="'.$object.'",
                                            assesment="'.$assesment.'",
                                            plan="'.$plan.'",
                                            keterangan="'.$keterangan.'",
                                            date_created="'.$date_created.'",
                                            tgl_jaga="'.$tgl_jaga.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=bodj&s=bodj"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=bodj&s=bodj"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
}