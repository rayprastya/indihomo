<?php 
	ini_set('display_errors', 0);
	ini_set('max_execution_time',0);

	date_default_timezone_set("Asia/Jakarta");

	session_start();
	session_destroy();
	include "db/db.php";

	unset($_SESSION['id']);
    unset($_SESSION['foto']);
    unset($_SESSION['NIK']);
    unset($_SESSION['NIDN']);
    unset($_SESSION['nama_lengkap']);
    unset($_SESSION['tempat_lahir']);
    unset($_SESSION['tgl_lahir']);
    unset($_SESSION['usia']);
    unset($_SESSION['agama']);
    unset($_SESSION['jenis_kelamin']);
    unset($_SESSION['status_pernikahan']);
    unset($_SESSION['status_pegawai']);
    unset($_SESSION['jabatan']);
    unset($_SESSION['unit']);
    unset($_SESSION['golongan']);
    unset($_SESSION['pangkat']);
    unset($_SESSION['gelar_s1']);
    unset($_SESSION['gelar_s2']);
    unset($_SESSION['gelar_s3']);
    unset($_SESSION['email']);
    unset($_SESSION['alamat']);
    unset($_SESSION['telepon']);
    unset($_SESSION['role']);

	header('Location: index.php'); 
?>

