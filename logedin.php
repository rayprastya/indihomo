<?php
session_start();
include 'db/db.php';

function login($data) {
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['foto'] = $data['foto'];
    $_SESSION['nama_user'] = $data['nama_user'];
    $_SESSION['email_user'] = $data['email_user'];
    $_SESSION['nomorhp_user'] = $data['nomorhp_user'];
    $_SESSION['jk_user'] = $data['jk_user'];
    $_SESSION['role'] = $data['role'];
    return 2;
  }
  else return 1;
}

if(isset($_POST["username"])){$username_=$db->real_escape_string($_POST["username"]);}else{$username_="";}
if(isset($_POST["password"])){$password_=$db->real_escape_string($_POST["password"]);}else{$password_="";}

$user = $db->query("SELECT * FROM user 
                    WHERE username='".$username_."' AND password='".md5($password_)."'", 0);
$result = $user->fetch_assoc();

$id_user = $result['id_user'];
$username = $result['username'];
$foto = $result['foto'];
$nama_user = $result['nama_user'];
$email_user = $result['email_user'];
$nomorhp_user = $result['nomorhp_user'];
$jk_user = $result['jk_user'];
$password = $result['password'];
$role = $result['role'];

$data = [
  'id_user' => $id_user,
  'username' => $username,
  'foto' => $foto,
  'nama_user' => $nama_user,
  'email_user' => $email_user,
  'nomorhp_user' => $nomorhp_user,
  'jk_user' => $jk_user,
  'password' => $password,
  'password_hash' => md5($password_),
  'role' => $role
];

  $log_type = "login";
  $date_log = date('Y-m-d H:i:m');
  $data2 = $db->query("INSERT INTO tb_log VALUES(' ','$nama_user','$log_type','$date_log',' ')");

$loginArea = login($data);
if ($loginArea == 2) {
  echo '<script>alert("Hai, ' . $nama_user . '. kamu berhasil login");location.href = "indexx.php"</script>';
} else if ($loginArea == 1) {
  echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
  header("Location: ./notfound.php");
}
?>