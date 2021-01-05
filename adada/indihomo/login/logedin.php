<?php
session_start();
include 'db/db.php';

function login($data) {
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['foto'] = $data['foto'];
    $_SESSION['NIK'] = $data['NIK'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['tempat_lahir'] = $data['tempat_lahir'];
    $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
    $_SESSION['usia'] = $data['usia'];
    $_SESSION['agama'] = $data['agama'];
    $_SESSION['jenis_kelamin'] = $data['jenis_kelamin'];
    $_SESSION['status_pernikahan'] = $data['status_pernikahan'];
    $_SESSION['status_pegawai'] = $data['status_pegawai'];
    $_SESSION['jabatan'] = $data['jabatan'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['alamat'] = $data['alamat'];
    $_SESSION['telepon'] = $data['telepon'];
    $_SESSION['role'] = $data['role'];
    return 2;
  }
  else return 1;
}

if(isset($_POST["username"])){$username_=$db->real_escape_string($_POST["username"]);}else{$username_="";}
if(isset($_POST["password"])){$password_=$db->real_escape_string($_POST["password"]);}else{$password_="";}

$user = $db->query("SELECT * FROM tb_user 
                    WHERE username='".$username_."' AND password='".md5($password_)."'", 0);
$result = $user->fetch_assoc();

$id = $result['id'];
$password = $result['password'];
$foto = $result['foto'];
$NIK = $result['NIK'];
$nama_lengkap = $result['nama_lengkap'];
$tempat_lahir = $result['tempat_lahir'];
$tgl_lahir = $result['tgl_lahir'];
$usia = $result['usia'];
$agama = $result['agama'];
$jenis_kelamin = $result['jenis_kelamin'];
$status_pernikahan = $result['status_pernikahan'];
$status_pegawai = $result['status_pegawai'];
$jabatan = $result['jabatan'];
$email = $result['email'];
$alamat = $result['alamat'];
$telepon = $result['telepon'];
$role = $result['role'];

$data = [
  'id' => $id,
  'password' => $password,
  'password_hash' => md5($password_),
  'foto' => $foto,
  'NIK' => $NIK,
  'nama_lengkap' => $nama_lengkap,
  'tempat_lahir' => $tempat_lahir,
  'tgl_lahir' => $tgl_lahir,
  'usia' => $usia,
  'agama' => $agama,
  'jenis_kelamin' => $jenis_kelamin,
  'status_pernikahan' => $status_pernikahan,
  'status_pegawai' => $status_pegawai,
  'jabatan' => $jabatan,
  'email' => $email,
  'alamat' => $alamat,
  'telepon' => $telepon,
  'role' => $role
];

  $log_type = "login";
  $date_log = date('Y-m-d H:i:m');
  $data2 = $db->query("INSERT INTO tb_log VALUES(' ','$nama_lengkap','$log_type','$date_log',' ')");

$loginArea = login($data);
if ($loginArea == 2) {
  echo '<script>alert("Hai, ' . $nama_lengkap . '. kamu berhasil login");location.href = "index.php"</script>';
} else if ($loginArea == 1) {
  echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
  header("Location: ./notfound.php");
}
?>