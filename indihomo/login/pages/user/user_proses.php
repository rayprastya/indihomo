<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $username = $_POST['NIK'];
    $password = md5($_POST['NIK']);
    $NIK = $_POST['NIK'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $status_pegawai = $_POST['status_pegawai'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $role = $_POST['role'];
    
    $insert = $db->query('INSERT INTO tb_user 
                        (username,password,NIK,nama_lengkap,tempat_lahir,tgl_lahir,agama,jenis_kelamin,status_pernikahan,status_pegawai,jabatan,email,alamat,telepon,role) 
                        VALUES 
                        ("'.$username.'","'.$password.'","'.$NIK.'","'.$nama_lengkap.'","'.$tempat_lahir.'","'.$tgl_lahir.'","'.$agama.'","'.$jenis_kelamin.'","'.$status_pernikahan.'","'.$status_pegawai.'","'.$jabatan.'","'.$email.'","'.$alamat.'","'.$telepon.'","'.$role.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $username = $_POST['NIK'];
    $password = md5($_POST['NIK']);
    $NIK = $_POST['NIK'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $status_pegawai = $_POST['status_pegawai'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $role = $_POST['role'];
    
    $update = $db->query('UPDATE tb_user SET username="'.$username.'",
                                            password="'.$password.'",
                                            NIK="'.$NIK.'",
                                            nama_lengkap="'.$nama_lengkap.'",
                                            tempat_lahir="'.$tempat_lahir.'",
                                            tgl_lahir="'.$tgl_lahir.'",
                                            agama="'.$agama.'",
                                            jenis_kelamin="'.$jenis_kelamin.'",
                                            status_pernikahan="'.$status_pernikahan.'",
                                            status_pegawai="'.$status_pegawai.'",
                                            jabatan="'.$jabatan.'",
                                            email="'.$email.'",
                                            alamat="'.$alamat.'",
                                            telepon="'.$telepon.'",
                                            role="'.$role.'" 
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_user WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
} else if ($aksi == 'update_password') {
    $id = $_GET['id'];
    $password = md5($_POST['password']);
    
    $change = $db->query('UPDATE tb_user SET password="'.$password.'" WHERE id="'.$id.'"');

    if ($change) {
        echo '<script>alert("Password berhasil diganti");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Password gagal diganti");history.go(-1)</script>';
    }
}