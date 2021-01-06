<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_user'];
    $jenis_kelamin = $_POST['jk_user'];
    $email = $_POST['email_user'];
    $telepon = $_POST['nomorhp_user'];
    $role = $_POST['role'];
    
    $insert = $db->query('INSERT INTO user 
                        (username,password,nama_user,jk_user,email_user,nomorhp_user,role) 
                        VALUES 
                        ("'.$username.'","'.$password.'","'.$nama_lengkap.'","'.$jenis_kelamin.'","'.$tgl_lahir.'","'.$email.'","'.$telepon.'","'.$role.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE
}else if ($aksi == 'daftar') {
    // $id = $_GET['id_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_user'];
    $jenis_kelamin = $_POST['jk_user'];
    $email = $_POST['email_user'];
    $telepon = $_POST['nomorhp_user'];
    // $role = $_POST['role'];
    
    $daftar = $db->query('INSERT INTO user 
                        (username,password,nama_user,jk_user,email_user,nomorhp_user,role) 
                        VALUES 
                        ("'.$username.'","'.$password.'","'.$nama_lengkap.'","'.$jenis_kelamin.'","'.$email.'","'.$telepon.'","user")');
    if ($daftar) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../indexx.php"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    } 
    
}else if ($aksi == 'update') {
    $id = $_GET['id_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_user'];
    $jenis_kelamin = $_POST['jk_user'];
    $email = $_POST['email_user'];
    $telepon = $_POST['nomorhp_user'];
    $role = $_POST['role'];
    
    $update = $db->query('UPDATE user SET username="'.$username.'",
                                            nama_lengkap="'.$nama_lengkap.'",
                                            email="'.$email.'",
                                            telepon="'.$telepon.'",
                                            jenis_kelamin="'.$jenis_kelamin.'",
                                            password="'.$password.'",
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
    $hapus = $db->query('DELETE FROM user WHERE id_user="'.$id_user.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
} else if ($aksi == 'update_password') {
    $id = $_GET['id_user'];
    $password = md5($_POST['password']);
    
    $change = $db->query('UPDATE user SET password="'.$password.'" WHERE id="'.$id.'"');

    if ($change) {
        echo '<script>alert("Password berhasil diganti");location.href = "../../index.php?m=user&s=user"</script>';
    } else {
        echo '<script>alert("Password gagal diganti");history.go(-1)</script>';
    }
}